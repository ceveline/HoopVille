<?php

namespace app\controllers;

class Profile extends \app\core\Controller
{

  
    //creating a profile on the user end
  public function create()
  {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

      $profile= new \app\models\profile(); //instance of profile class

      //!!!!!!! change to session id when branches are merged
      $profile->user_id = 1; //user_id in the instace
      $profile->profile_text = $_POST['fname']; //post to grab text and rating
      $profile->rating = $_POST['lname'];
      $profile->type = $_POST['dob'];


      $profile->insert(); //inserting into db



    } else {
      $this->view('User/profile/create', null, true); 
      
    }


}