<?php

namespace app\controllers;


class MembershipType extends \app\core\Controller {
    function list()
    {
      $membership = new \app\models\MembershipType(); 
      $membershipTypes = $membership->getAll(); 
      
  
      $this->view('User/membership/list', $membershipTypes, true);
      
    }


    function buy(){
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $guest = new \app\models\Membership();
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