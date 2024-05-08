<?php

namespace app\controllers;


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
                    header('location:/login');
                }
                return;
            }
            
            $user = new \app\models\User();
            
            $user = $user->getByEmail($email);

            
            if($user && password_verify($password, $user->password_hash) && $user->active == 1) {
                $_SESSION['user_id'] = $user->user_id;
                header('location:/Home'); 
            }
            else {
                header('location:/login');
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

            header('location:/login');
        }


        else {
            $this->view('User/register', null, true);
        }
        
    }

    //logout
    function logout() {
        session_destroy();

		header('location:/login');
    }

    function forgetPassword($email) {
        
    }


    function home() {
        $this->view('home', null, true);
    }

    function payment(){
        $this->view('User/payment', null, true);

    }

    function myAccount(){
        $user = new \app\models\User();
        $userid = 1;
        $user = $user->getById(1);
        $booking = new \app\models\Booking();
        $bookings = $booking->getBookingsByUserId($userid);
        $profile = new \app\models\Profile();
        $profile = $profile->getByUserId($userid);
        $camp = new \app\models\Camp();
        $camps = $camp->listAllCamps();

        echo var_dump($camps);
        $membership = new \app\models\Membership();
        $membership->getMembershipByUserId($userid);

        $data = [
            'user' => $user,
            'bookings' => $bookings,
            'profile' => $profile,
            'camps' => $camps,
            'membership' => $membership
        ];

        $this->view('User/myAccount', $data, true);

    }
}