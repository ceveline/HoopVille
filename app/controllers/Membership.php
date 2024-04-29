<?php

namespace app\controllers;


class Membership extends \app\core\Controller
{

  // only for admin
    function list() {
        $membership_types = new \app\models\Membership_type();
        $membership_types = $membership_types->getAll();

        $this->view('User/Membership/list', ['memberships' => $membership_types], true);
    }

    function list_for_user($user_id) { //to show on profile
      
      $membership_model = new \app\models\Membership();
      $membership_model = $membership_model->getByUserId($user_id);

      $membership_type_model = new \app\models\Membership_type();
      $membership_types = $membership_type_model->getAll();
      $membership_type = $membership_type_model->getByType($membership_model->membership_type);


      $this->view('User/Membership/individual', ['membership' => $membership_model, 'type' => $membership_type, 'types'=> $membership_types], true);
    }

//can only create 1 membership at a time
    function create() {
      date_default_timezone_set('America/New_York'); // Set the timezone
  
      // Create a new instance of the Membership model
      $membership_model = new \app\models\Membership();
  
      // Get the user ID from the session
      $user_id = $_SESSION['user_id'];
  
      // Get the current timestamp
      $current_timestamp = time();
  
      // Calculate the future timestamp (1 year from now)
      $future_timestamp = strtotime('+1 year', $current_timestamp);
  
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          // Set the membership details
          $membership_model->membership_type = $_POST['membership_type'];
          $membership_model->user_id = $user_id;
          $membership_model->start_date = date('Y-m-d H:i:s', $current_timestamp);
          $membership_model->end_date = date('Y-m-d H:i:s', $future_timestamp);
  
          // Insert the membership into the database
          $membership_model->insert();
  
          // Redirect to the menu page
          header('location:/Home');
      } else {
          // If it's not a POST request, display the membership list page
          $this->view('User/Membership/list', null, true);
      }
  }

  // function edit($membership_id) {
  //   $membership_model = new \app\models\Membership();
  //   $user_id = $_SESSION['user_id'];

  //   //get the old membership data
  //   $membership_model = $membership_model->getByUserId($user_id); //a user can only have 1 membership
  //   $current_timestamp = time();

    
  //   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  //     if ($membership_model->membership_type != 'Base Training') {
  //       $membership_model->membership_type = $_POST['membership_type'];
  //       $membership_model->user_id = $user_id;
  //       $membership_model->start_date = date('Y-m-d H:i:s', $current_timestamp);
  //       $membership_model->end_date = $membership_model->end_date;

  //       $membership_model->update($membership_id);

  //       header('location:/Home'); //change it to go back to the profile page
  //     }
  //     else {
  //       $this->view("User/Membership/edit", ['membership' => $membership_model], true);
  //     }
      
  //   }
  //   else {
  //     $this->view("User/Membership/edit", ['membership' => $membership_model], true);
  //   }

  // }

  function edit($membership_id) {
    $membership_model = new \app\models\Membership();
    $user_id = $_SESSION['user_id'];

    // Get the old membership data
    $membership_model = $membership_model->getByUserId($user_id); //a user can only have 1 membership
    $current_timestamp = time();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if ($membership_model->membership_type != 'Base Training') {
            $membership_model->membership_type = $_POST['membership_type'];
            $membership_model->user_id = $user_id;
            $membership_model->start_date = date('Y-m-d H:i:s', $current_timestamp);
            $membership_model->end_date = $membership_model->end_date;

            $membership_model->update($membership_id);

            header('location:/Home'); //change it to go back to the profile page
        } else {
            $this->view("User/Membership/edit", ['membership' => $membership_model], true);
        }
    } else {
        $this->view("User/Membership/edit", ['membership' => $membership_model], true);
    }
}


  function delete($membership_id){

  }
    

}