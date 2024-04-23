<?php

namespace app\controllers;


class Camp extends \app\core\Controller {
    function list()
    {
      
      $this->view('User/Camp/list', null, true);
    }

    function insert(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $guest = new \app\models\Guest();
            $guest->first_name = $_POST['first-name'];
            $guest->last_name = $_POST['last_name'];
            $guest->date_of_birth = $_POST['dob'];


            $camp = new \app\models\Camp(); //instance of camp class

            $camp->camp_type = $_POST['camp_type'];
            $camp->user_id = $_SESSION['user_id'];
            $camp->guest_id = $_POST['guest-id']; //must get from guest isntance
      
            $camp->insert(); //inserting into db
      
            header('location:/User/Camp/list'); //redirecting user to the general review page
          } else {
            $this->view('User/Camp/list', null, true); 
            
          }
    }

    function getUserCamps(){

    }
  
}