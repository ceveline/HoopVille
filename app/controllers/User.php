<?php

namespace app\controllers;


class User extends \app\core\Controller {

    function login() {
        // if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            
        //     $user = new \app\models\User();
        //     $username = $_POST['username'];
        //     $user = $user->getByUsername($username);

        //     $password = $_POST['password'];
        //     if($user && password_verify($password, $user->password_hash)) {
        //         $_SESSION['user_id'] = $user->user_id;
        //         header('location:/Profile/index'); 
        //     }
        //     else {
        //         header('location:/User/login');
        //     }
        // }
        // else {
        //     $this->view('User/login', null, true); //show the login view if user's input is incorrect/doesn't match
        // }
        $this->view('User/login', null, true); 
    }
}