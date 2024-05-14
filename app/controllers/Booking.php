<?php

namespace app\controllers;


class Booking extends \app\core\Controller
{

  #[\app\filters\Admin\IsAdmin]
  function listAdmin()
  {
    $booking = new \app\models\Booking();
    $bookings = $booking->getBookings();

    $user = new \app\models\User();
    $profile = new \app\models\Profile();

    foreach ($bookings as $booking) {
      $booking->user = $user->getById($booking->user_id);
      $booking->profile = $profile->getByUserId($booking->user_id);
    }

    $this->view('Admin/Booking/list', $bookings, true);
  }


  #[\app\filters\Login]
  function create()
  {

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {


      $booking = new \app\models\Booking();
      $booking->booking_type = $_POST['booking_type'];
      $booking->date = $_POST['date'];
      $booking->start_time = $_POST['start_time'];
      $booking->end_time = $_POST['end_time'];
      $booking->user_id = $_SESSION['user_id'];
      $booking->status = 0;

      $booking->insert();

      // redirect handled on the front-end

    } else {
      $this->view('User/Booking/create', null, true);
    }

  }

  // admin or user's booking
  //#[\app\filters\Booking\AdminUsersBooking]
  function edit()
  {
    $booking = new \app\models\Booking();


    if ($_SERVER['REQUEST_METHOD'] === 'POST') {


      $booking->booking_type = $_POST['booking_type'];
      $booking->date = $_POST['date'];
      $booking->start_time = $_POST['start_time'];
      $booking->end_time = $_POST['end_time'];
      $booking->status = $_POST['status'];
      $booking->booking_id = $_POST['id'];

      $booking->update();
      // redirect in JS


    } else {

      $user = new \app\models\User();
      $profile = new \app\models\Profile();

      $booking = $booking->getBookingById($_GET['id']);
      $booking->user = $user->getById(1);
      $booking->profile = $profile->getByUserId($booking->user_id);

      $this->view('Booking/edit', $booking, true);
    }

  }

  // admin or user's booking (cancel booking)
  #[\app\filters\Booking\AdminUsersBooking]
  function delete()
  {
    $booking_id = $_GET['id'];
    $booking = new \app\models\Booking();
    $booking = $booking->getBookingById($booking_id);
    $booking->delete();
    header("location: /Admin/booking/list");
  }

  function getTimeSlotAvailabilities($booking_type, $bookings)
  {
    $timeSlotAvailabilities = [
      "10:00:00" => "",
      "12:00:00" => "",
      "02:00:00" => "",
      "04:00:00" => "",
    ];

    $separatedBookings = [
      "10:00:00" => [],
      "12:00:00" => [],
      "02:00:00" => [],
      "04:00:00" => []
    ];

    foreach ($bookings as $booking) {
      $startTime = $booking->start_time;
      $separatedBookings[$startTime][] = $booking;
    }

    if ($booking_type == "half") {
      foreach ($separatedBookings as $time => $bookings) {

        if (count($bookings) == 2 || (count($bookings) == 1 && reset($bookings)->booking_type == "full")) {
          $timeSlotAvailabilities[$time] = "disabled";
        } else {
          $timeSlotAvailabilities[$time] = "enabled";
        }
      }
    } else if ($booking_type == "full") {
      foreach ($separatedBookings as $time => $bookings) {

        // if 1 full or half court is booked time slot is disabled for full court
        if (count($bookings) >= 1) {
          $timeSlotAvailabilities[$time] = "disabled";
        } else {
          $timeSlotAvailabilities[$time] = "enabled";
        }
      }
    }

    return $timeSlotAvailabilities;
  }

  function getDisabledDates()
  {

    $booking_type = $_GET['booking_type'];
    $booking = new \app\models\Booking();
    $bookings = $booking->getBookings();

    $disabledDates = [];

    // unique dates
    $uniqueDates = [];
    foreach ($bookings as $booking) {
      $date = $booking->date;
      if (!in_array($date, $uniqueDates)) {
        $uniqueDates[] = $date;
      }
    }

    foreach ($uniqueDates as $date) {
      if (!in_array("enabled", $this->getTimeSlotAvailabilities($booking_type, $booking->getBookingsByDate($date)))) {
        $disabledDates[] = $date;
      }
    }

    echo json_encode($disabledDates);
  }

  function getTimeSlotsByDate()
  {
    $booking_type = $_GET['booking_type'];
    $date = $_GET['date'];
    $booking = new \app\models\Booking();
    $bookings = $booking->getBookingsByDate($date);
    echo json_encode($this->getTimeSlotAvailabilities($booking_type, $bookings));
  }


  // admin only
  #[\app\filters\Admin\IsAdmin]
  function filterByStatus()
  {
    $status = $_GET['status'];
    $booking = new \app\models\Booking();

    $bookings = $booking->getBookingsByStatus($status);

    $user = new \app\models\User();
    $profile = new \app\models\Profile();

    foreach ($bookings as $booking) {
      $booking->user = $user->getById($booking->user_id);
      $booking->profile = $profile->getByUserId($booking->user_id);
    }

    echo json_encode($bookings);
  }

  // admin only
  #[\app\filters\Admin\IsAdmin]
  function bookingsList()
  {
    $booking = new \app\models\Booking();
    $bookings = $booking->getBookings();

    $user = new \app\models\User();
    $profile = new \app\models\Profile();

    foreach ($bookings as $booking) {
      $booking->user = $user->getById($booking->user_id);
      $booking->profile = $profile->getByUserId($booking->user_id);
    }

    echo json_encode($bookings);
  }

  // admin only
  #[\app\filters\Admin\IsAdmin]
  function searchBookingsByEmail()
  {
    $text = $_GET['email'];
    $booking = new \app\models\Booking();
    $bookings = $booking->searchBookingsByEmail($text);

    $user = new \app\models\User();
    $profile = new \app\models\Profile();

    foreach ($bookings as $booking) {
      $booking->user = $user->getById($booking->user_id);
      $booking->profile = $profile->getByUserId($booking->user_id);
    }

    echo json_encode($bookings);
  }

  // admin only
  #[\app\filters\Admin\IsAdmin]
  function updateStatus()
  {
    $booking = new \app\models\Booking();
    $booking = $booking->getBookingById($_GET['id']);
    $booking->status = $_GET['status'];
    $booking->update();
    header("location:/Admin/booking/edit?id=$booking->booking_id");
  }

  // Admin side: it will delete the booking related to the user
  public function cancelBooking($profile_id)
  {
    // Check if the request method is POST
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      // Get the membership ID from the POST data
      $booking_id = $_POST['booking_id'];
      $booking_model = new \app\models\Booking();
      $booking_model->deleteById($booking_id);
      header("Location: /Profile/infoDetails/{$profile_id}");
    }
  }

}