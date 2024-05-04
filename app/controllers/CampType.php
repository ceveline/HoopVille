<?php

namespace app\controllers;


class CampType extends \app\core\Controller {
    function list()
    {
      $camp = new \app\models\CampType(); 
      $campTypes = $camp->getAll(); 
      
  
      $this->view('User/camp/list', $campTypes, true);
      
    }


    function enrol(){
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $guest = new \app\models\Guest();
        $guest->first_name = $_POST['first_name'];
        $guest->last_name = $_POST['last_name'];
        $guest->date_of_birth = $_POST['dob'];

        $guest->insert();

        $camp = new \app\models\Camp(); //instance of review class
  
        //!!!!!!! change to session id when branches are merged
        $camp->user_id = 1; //user_id in the instace
        $camp->camp_type =  $_POST['camp_type'];
        $camp->guest_id = $guest->guest_id;

        $camp->insert(); //inserting into db
  
  
      //  header('location:/User/review/list'); //redirecting user to the general review page
      } else {
        $this->view('User/review/create', null, true); 
        
      }

    }
    


  
}