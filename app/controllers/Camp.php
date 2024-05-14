<?php

namespace app\controllers;


class Camp extends \app\core\Controller
{



  function buy()
  {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

      //$user_id = $_SESSION['user_id'];

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
      $camp->camp_type = $type;
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



  function listAll()
  {
    $camp = new \app\models\Camp();
    $camp = $camp->listAllCamps();

  }

  //user side
  function listCamps()
  {


    $userid = 1;
    //$userid = $_SESSION['user_id'];
    $camp = new \app\models\Camp();
    $camp = $camp->listUserCamps($userid);
  }

  // Admin side: it will delete the camp related to the user as well as the guest if there is
  public function cancelCamp($profile_id)
  {
    // Check if the request method is POST
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      // Get the membership ID from the POST data
      $camp_id = $_POST['camp_id'];
      $camp_model = new \app\models\Camp();
      $camp_model->deleteById($camp_id);

      header("Location: /Profile/infoDetails/{$profile_id}");
    }
  }




}