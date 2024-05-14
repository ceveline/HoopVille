<?php

namespace app\controllers;

require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class User extends \app\core\Controller
{

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
                    $_SESSION['admin_id'] = $admin->admin_id;
                    header('location:/Home');
                } else {
                    header('location:/login');
                }
                return;
            }

            $user = new \app\models\User();

            $user = $user->getByEmail($email);


            if ($user && password_verify($password, $user->password_hash) && $user->active == 1) {
                $_SESSION['user_id'] = $user->user_id;
                header('location:/Home');
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
                    $mail->Body = "Click <a href='http://localhost/User/resetPassword?token=$token'>here</a> to reset your password.";

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

    // User side: display info about the company
    public function aboutUs()
    {
        $this->view('User/aboutUs', null, true);
    }

    // User side: send a message to the coaches
    public function sendMessage()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $subject = $_POST["subject"];
            $message = $_POST["message"];

            // Check if the email is authorized
            $authorisedEmails = ['john@example.com', 'jane@example.com', "hussainamin285@gmail.com"];

            $mail = new PHPMailer(true);

            try {
                // Server settings
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com'; // Your SMTP server
                $mail->SMTPAuth = true;
                $mail->Username = "hoopville10@gmail.com";
                $mail->Password = "xynqbjmtibkahokh";
                $mail->SMTPSecure = 'ssl';
                $mail->Port = 465;

                // Recipients
                $mail->setFrom('HoopVille@example.com', 'HoopVille');

                if (in_array($email, $authorisedEmails)) {
                    $mail->addAddress($email);
                } else {
                    $mail->addAddress('hussainamin285@gmail.com');
                }

                // Content
                $mail->isHTML(true);
                $mail->Subject = $subject;
                $mail->Body = "<p>Name: $name</p><p>Email: $email</p><p>Message: $message</p>";

                $mail->send();
                echo "<script>
                window.location.href='/User/contactChoice';
                alert('Message has been sent');
                </script>";
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        }
    }

    // User side: make sure that the token is available
    public function resetPassword()
    {
        $token = $_GET["token"];
        $tokenHash = hash("sha256", $token);

        try {
            $userModel = new \app\models\User();
            $user = $userModel->getByResetTokenHash($tokenHash);

            if ($user === false) {
                die("Token not found");
            }

            if (strtotime($user["reset_token_expires_at"]) <= time()) {
                die("Token has expired");
            }

            // Token is valid and hasn't expired, proceed to display the reset password form
            $data = ['token' => $token];
            $this->view('User/resetPassword', $data, true);

        } catch (PDOException $e) {
            echo "Database connection failed: " . $e->getMessage();
        }
    }

    // User side: will allow to create the new password
    public function processResetPassword()
    {
        $token = $_POST["token"];
        $password = $_POST["password"];
        $tokenHash = hash("sha256", $token);

        try {
            $userModel = new \app\models\User();
            $user = $userModel->getByResetTokenHash($tokenHash);

            if ($user === false) {
                die("Token not found");
            }

            if (strtotime($user["reset_token_expires_at"]) <= time()) {
                die("Token has expired");
            }

            // Generate password hash
            $passwordHash = password_hash($password, PASSWORD_DEFAULT);

            // Update password and remove reset token
            $success = $userModel->updatePasswordAndRemoveToken($user["user_id"], $passwordHash);

            if ($success) {
                // Display success message
                header('location:/login');
            } else {
                echo "Password update failed.";
            }
        } catch (PDOException $e) {
            echo "Database connection failed: " . $e->getMessage();
        }
    }

}