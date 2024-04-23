<?php

namespace app\controllers;


class Administrator extends \app\core\Controller {

    function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            
            $admin = new \app\models\Administrator();
            $email = $_POST['email'];
            $admin = $admin->getByEmail($email);

            $password = $_POST['password_hash'];
            if($admin && password_verify($password, $admin->password_hash)) {
                $_SESSION['admin_id'] = $admin->admin_id;
                header('location:/Main'); //change to dashboard
            }
            else {
                header('location:/Admin/login');
            }
        }
        else {
            $this->view('Admin/login', null, true); //show the login view if user's input is incorrect/doesn't match
        }
    }

    function register() {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $admin = new \app\models\Administrator();

            $admin->email = $_POST['email'];
            $admin->password_hash = password_hash($_POST['password_hash'], PASSWORD_DEFAULT);

            $admin->insert();

            header('location:/Admin/login');
        }


        else {
            $this->view('Admin/register', null, true);
        }
        
    }

    //logout
    function logout() {
        session_destroy();

		header('location:/Admin/login');
    }

}