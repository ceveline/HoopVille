<?php

namespace app\controllers;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

use chillerlan\Authenticator\{Authenticator, AuthenticatorOptions};
use chillerlan\QRCode\QRCode;

require_once __DIR__ . '/../../vendor/autoload.php';

class User extends \app\core\Controller
{

    // if user isn't logged-in go to login, else if user already has a secret go to check2fa
    #[\app\filters\Setup2FA]
    function setup2fa()
    {
        $options = new AuthenticatorOptions();
        $authenticator = new Authenticator($options);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_SESSION['secret_setup'])) {
                $authenticator->setSecret($_SESSION['secret_setup']);
            } else {
                header('location:/User/2FA/setup2fa');
            }
            //was submitted, check the TOTP
            $totp = $_POST['totp'];
            if ($authenticator->verify($totp)) {
                //record to the user record

                // success = remove temp and set ACTUAL user_id or admin_id

                // if user login
                if (isset($_SESSION['temp_user_id'])) {
                    // success = remove temp and set ACTUAL user_id
                    $_SESSION['user_id'] = $_SESSION['temp_user_id'];
                    unset($_SESSION['temp_user_id']);

                    $user = new \app\models\User();
                    $user = $user->getById($_SESSION['user_id']);
                    $user->secret = $_SESSION['secret_setup'];
                    $user->add2FA();
                    // if admin login
                } else if (isset($_SESSION['temp_admin_id'])) {
                    $_SESSION['admin_id'] = $_SESSION['temp_admin_id'];
                    unset($_SESSION['temp_admin_id']);

                    $admin = new \app\models\Administrator();
                    $admin = $admin->getById($_SESSION['admin_id']);
                    $admin->secret = $_SESSION['secret_setup'];
                    $admin->add2FA();
                }

                header('location:/Home');
            } else {
                header('location:/User/2FA/setup2fa');
            }
        } else {
            $_SESSION['secret_setup'] = $authenticator->createSecret();
            //generate the URI with the secret for the user
            $uri = $authenticator->getUri('Superb application', 'localhost');
            $QRCode = (new QRCode)->render($uri);
            $this->view('User/2FA/setup2fa', ['QRCode' => $QRCode]);
        }
    }

    // if user isn't logged-in go to login, else if user does NOT have a secret go to setup2fa
    #[\app\filters\Check2FA]
    function check2fa()
    {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $options = new AuthenticatorOptions();
            $authenticator = new Authenticator($options);
            $authenticator->setSecret($_SESSION['secret']);
            if ($authenticator->verify($_POST['totp'])) {
                unset($_SESSION['secret']);


                if (isset($_SESSION['temp_user_id'])) {
                    // success = remove temp and set ACTUAL user_id
                    $_SESSION['user_id'] = $_SESSION['temp_user_id'];
                    unset($_SESSION['temp_user_id']);
                } else if (isset($_SESSION['temp_admin_id'])) {
                    $_SESSION['admin_id'] = $_SESSION['temp_admin_id'];
                    unset($_SESSION['temp_admin_id']);
                }

                header('location:/Home');//the good place
            } else {
                session_destroy();
                header('location:/login');
            }
        } else {
            $this->view('User/2FA/check2fa');
        }
    }

    #[\app\filters\Logout]
    function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $admin = new \app\models\Administrator();
            $email = $_POST['email'];
            $password = $_POST['password_hash'];

            if ($email === "admin@gmail.com") {
                $admin = $admin->getByEmail($email);

                if ($admin && password_verify($password, $admin->password_hash)) {
                    // $_SESSION['admin_id'] = $admin->admin_id;
                    $_SESSION['temp_admin_id'] = $admin->admin_id;
                    $_SESSION['secret'] = $admin->secret;



                    header('location:/User/2FA/setup2fa');

                } else {
                    header('location:/login');
                }
                return;
            }

            $user = new \app\models\User();

            $user = $user->getByEmail($email);

            if ($user && password_verify($password, $user->password_hash) && $user->active == 1) {

                // temp_user_id --> ONLY when the user does 2FA we set the actual user_id
                $_SESSION['temp_user_id'] = $user->user_id;
                $_SESSION['secret'] = $user->secret;

                header('location:/User/2FA/setup2fa');
            } else {
                header('location:/login');
            }
        } else {
            $this->view('User/login', null, true); //show the login view if user's input is incorrect/doesn't match
        }
    }

    #[\app\filters\Logout]
    function register()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            
            $user = new \app\models\User();
            //getting a user instance with the email
            $existing_user = $user->getByEmail($_POST['email']);

            //if something is in the user instace, show an error message to the view
            if ($existing_user->email !== null) {
                
                $error_message = 'Email already exists. Please choose a different email address.';
                $this->view('User/login', $error_message, true);
                return;

                //if it doesnt exist, proceed with register
            } else {
                $profile = new \app\models\Profile();

                //for user table
                $user->email = $_POST['email'];
                $user->password_hash = password_hash($_POST['password_hash'], PASSWORD_DEFAULT);
    
                $user->insert();
                $user_model = $user->getByEmail($_POST['email']);
                //for profile table
                $profile->user_id = $user_model->user_id;
                $profile->first_name = $_POST['first_name'];
                $profile->last_name = $_POST['last_name'];
                $profile->phone = $_POST['phone'];
                $profile->date_of_birth = $_POST['date_of_birth'];
    
                //insert to database
                $profile->insert();
    
                header('location:/login');
            }

          
        } else {
            $this->view('User/register', null, true);
        }
    }


    //logout
    function logout()
    {
        session_destroy();

        header('location:/login');
    }

    function forgotPassword()
    {
        $this->view('/User/forgotPassword', null, true);
    }



    function home()
    {
        $this->view('home', null, true);
    }

    function faq()
    {
        $this->view('faq', null, true);
    }
    public function contactChoice()
    {
        $this->view('/User/contactChoice', null, true);
    }

    public function contact($email)
    {

        $authorisedEmails = ['john@example.com', 'jane@example.com', "hussainamin285@gmail.com"];

        $data = ['email' => $email, 'authorisedEmails' => $authorisedEmails];

        $this->view('/User/contact', $data, true);

    }

    public function sendPasswordReset()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST["email"];

            $token = bin2hex(random_bytes(16));
            $token_hash = hash("sha256", $token);
            $expiry = date("Y-m-d H:i:s", time() + 60 * 30);

            $userModel = new \app\models\User();
            $success = $userModel->updateResetToken($email, $token_hash, $expiry);

            if ($success) {
                // Email configuration
                $mail = new PHPMailer(true);

                try {
                    // Server settings
                    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
                    $mail->isSMTP();
                    $mail->SMTPAuth = true;
                    $mail->Host = "smtp.gmail.com";
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
                    $mail->Port = 465;
                    $mail->Username = "hoopville10@gmail.com";
                    $mail->Password = "xynqbjmtibkahokh";

                    // Email content
                    $mail->isHTML(true);
                    $mail->setFrom("noreply@example.com");
                    $mail->addAddress($email);
                    $mail->Subject = "Password Reset";
                    $mail->Body = "Click <a href='http://localhost/reset-Password.php/?token=$token'>here</a> to reset your password.";

                    // Send email
                    $mail->send();

                    echo "<script>
                    window.location.href='/User/forgotPassword';
                    alert('Message has been sent');
                    </script>";

                } catch (Exception $e) {
                    // Display an error message to the user
                    echo "Message could not be sent. Mailer error: {$mail->ErrorInfo}";
                }
            } else {
                // Display an error message to the user
            }
        } else {
        }
    }

    //to replace by user id
    function myAccount()
    {
        $user = new \app\models\User();
        $userid = 1; //set to session
        $user = $user->getById(1);
        $booking = new \app\models\Booking();
        $bookings = $booking->getBookingsByUserId($userid);
        $profile = new \app\models\Profile();
        $profile = $profile->getByUserId($userid);
        $camp = new \app\models\Camp();
        $camps = $camp->listAllCamps();
        $review = new \app\models\Review();
        $reviews = $review->getUserReviews($userid);

        $membership = new \app\models\Membership();
        $memberships = $membership->getMembershipById($userid);




        $data = [
            'user' => $user,
            'bookings' => $bookings,
            'profile' => $profile,
            'camps' => $camps,
            'membership' => $memberships,
            'reviews' => $reviews
        ];

        $this->view('User/myAccount', $data, true);

    }

    public function aboutUs()
    {
        $this->view('User/aboutUs', null, true);
    }


    public function services()
    {
        $this->view('User/services', null, true);
    }

    public function payment()
    {
        $this->view('User/payment', null, true);
    }

}