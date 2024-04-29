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
    

}