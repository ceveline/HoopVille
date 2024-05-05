<?php
namespace app\controllers;

class Profile extends \app\core\Controller {

    //create a profile, insertion to the database
    public function create() {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $profile = new \app\models\Profile();

            //populate
            $profile->user_id = $_SESSION['user_id']; //get from the session
            $profile->first_name = $_POST['first_name'];
            $profile->middle_name = $_POST['middle_name'];
            $profile->last_name = $_POST['last_name'];
            
            //insert to DB
            $profile->insert();

            //redirect
            header('location:/Profile/index');

        }
        else {
            $this->view('Profile/create', null, true);
        }
    }


}