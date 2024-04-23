<?php

namespace app\controllers;


class User extends \app\core\Controller {

    function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            
            $user = new \app\models\User();
            $email = $_POST['email'];
            $user = $user->getByEmail($email);

            $password = $_POST['password'];
            if($user && password_verify($password, $user->password_hash)) {
                $_SESSION['user_id'] = $user->user_id;
                header('location:/Profile/index'); 
            }
            else {
                header('location:/User/login');
            }
        }
        else {
            $this->view('User/login', null, true); //show the login view if user's input is incorrect/doesn't match
        }
    }

    //register
    #[\app\filters\Logout]
    function register() {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $user = new \app\models\User();

            $user->email = $_POST['email'];
            $user->password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
        
            //insert to database
            $user->insert();
            header('location:/User/login');
        }
        else {
            $this->view('User/registration', null, true);
        }
        
    }

    //logout
    function logout() {
        session_destroy();

		header('location:/User/login');
    }

    function forgetPassword($email) {
        
    }
}