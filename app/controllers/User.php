<?php

namespace app\controllers;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/../../vendor/autoload.php';

class User extends \app\core\Controller {

    function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $admin = new \app\models\Administrator();
            $email = $_POST['email'];
            $password = $_POST['password_hash'];

            if ($email === "admin@gmail.com") {
                $admin = $admin->getByEmail($email);

                if($admin && password_verify($password, $admin->password_hash)) {
                    $_SESSION['admin_id'] = $admin->admin_id;
                    header('location:/Home'); 
                }
                else {
                    header('location:/User/login');
                }
                return;
            }
            
            $user = new \app\models\User();
            
            $user = $user->getByEmail($email);

            
            if($user && password_verify($password, $user->password_hash)) {
                $_SESSION['user_id'] = $user->user_id;
                header('location:/Home'); 
            }
            else {
                header('location:/User/login');
            }
        }
        else {
            $this->view('User/login', null, true); //show the login view if user's input is incorrect/doesn't match
        }
    }

    function register() {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
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

            header('location:/User/login');
        }


        else {
            $this->view('User/register', null, true);
        }
    }

    //logout
    function logout() {
        session_destroy();

		header('location:/User/login');
    }

    function forgotPassword() {
        $this->view('/User/forgotPassword', null, true);
    }
    

    function home() {
        $this->view('home', null, true);
    }

    public function contactChoice(){
        $this->view('/User/contactChoice', null, true);
    }

    public function contact(){
        $this->view('/User/contact', null, true);
    
    }

    public function sendPasswordReset() {
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
                    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
                    $mail->isSMTP();
                    $mail->SMTPAuth = true;
                    $mail->Host = "smtp.example.com";
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                    $mail->Port = 587;
                    $mail->Username = "your-user@example.com";
                    $mail->Password = "your-password";
    
                    // Email content
                    $mail->isHTML(true);
                    $mail->setFrom("noreply@example.com");
                    $mail->addAddress($email);
                    $mail->Subject = "Password Reset";
                    $mail->Body = "Click <a href='http://example.com/reset-password.php?token=$token'>here</a> to reset your password.";
    
                    // Send email
                    $mail->send();

                    echo "Message sent, please check your inbox.";
    
                    // Redirect user to a success page or display a success message
                } catch (Exception $e) {
                    // Display an error message to the user
                    echo "Message could not be sent. Mailer error: {$mail->ErrorInfo}";
                }
            } else {
                // Display an error message to the user
            }
        } else {
            // Handle invalid request method (e.g., GET)
        }
    }

public function aboutUs(){
    $this->view('User/aboutUs', null, true);
}

}