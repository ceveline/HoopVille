<?php

namespace app\controllers;


class Camp extends \app\core\Controller {
    


    function buy(){
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $user_id = $_SESSION['user_id'];

        date_default_timezone_set('America/New_York');

        $type = $_GET['camp_type'];

        $campType = new \app\models\CampType();
        $campType = $campType->getByType($type);

        $guest = new \app\models\Guest();
        $guest->first_name = $_POST['guest_fname'];
        $guest->last_name = $_POST['guest_lname'];
        $guest->date_of_birth = $_POST['guest_dob'];

        $guest->insert();

        $guest->guest_id = $guest->getRecent();

        $camp = new \app\models\Camp(); 
  
      
        $camp->user_id = 1; 
        $camp->camp_type =  $type;
        $camp->guest_id = $guest->guest_id;
        $camp->timestamp = date('Y-m-d H:i:s');

        $camp->insert(); 
        $this->view('User/payment', null, true); 

  
  
      } else {
        $type = $_GET['camp_type'];

        $campType = new \app\models\CampType();
        $campType = $campType->getByType($type);
        $this->view('User/camp/buy', $campType, true); 
        
      }

    }


  
    function listAll(){
      $camp = new \app\models\Camp();
      $camp = $camp->listAllCamps();

    }

    //user side
    function listCamps(){


   
      $userid = $_SESSION['user_id'];
      $camp = new \app\models\Camp();
      $camp = $camp->listUserCamps($userid);
    }
    


  
}