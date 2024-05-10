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
      $profile->user_id = $_SESSION['user_id'];
      $profile->first_name = $_POST['fname']; 
      $profile->last_name = $_POST['lname'];
      $profile->date_of_birth = $_POST['dob'];
      $profile->phone = $_POST['phoneNumber'];



      $profile->insert(); //inserting into db



    } else {
      $this->view('User/profile/create', null, true); 
      
    }
  }

  public function edit()
  {
    $profile = new \app\models\Profile();
    $profile = $profile->getByUserId($_GET['id']);
   

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

      $profile->first_name = $_POST['fname'];
      $profile->last_name = $_POST['lname'];
      $profile->phoneNumber = $_POST['phoneNumber'];

      
      $profile->update();

      header('location:/User/profile/create');
    } else {
      $this->view('User/profile/edit', $profile, true);
    }


  }
}