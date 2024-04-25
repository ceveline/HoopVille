<?php

namespace app\controllers;


class Booking extends \app\core\Controller
{

  // only for admin
  function listAdmin()
  {
    $booking = new \app\models\Booking();
    $bookings = $booking->getBookings();

    // $user = new \app\models\User();
    // $profile = new \app\models\Profile();

    // foreach($bookings as $booking) {
    // $booking->user = $user->getUserById($booking->user_id);
    // $booking->profile = $profile->getProfileByUserId($booking->user_id);      
    // }

    $this->view('Admin/Booking/list', $bookings, true);
  }

  function listUser()
  {
    // *****************************************
    $user_id = $_GET['id'];
    $booking = new \app\models\Booking();
    $userBookings = $booking->getBookingsByUserId($user_id);
    $this->view('User/Booking/list', $userBookings, true);
  }

  // must be admin or your publication
  function index()
  {
    // get id = params *********************

  }

  function create()
  {
    $this->view('User/Booking/create', null, true);
  }

  function update()
  {

  }

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

  //////////////////////////


  //////////////////////////

  function getTimeSlotsByDate()
  {
    $booking_type = $_GET['booking_type'];
    $date = $_GET['date'];
    $booking = new \app\models\Booking();
    $bookings = $booking->getBookingsByDate($date);
    echo json_encode($this->getTimeSlotAvailabilities($booking_type, $bookings));
  }


  function filterByStatus() {
    $status = $_GET['status'];
    $booking = new \app\models\Booking();
    $bookings = $booking->getBookingsByStatus($status);
    echo json_encode($bookings);
  }

  function bookingsList() {
    $booking = new \app\models\Booking();
    $bookings = $booking->getBookings();
    echo json_encode($bookings);
  }

  function searchBookings() {
    $text = $_GET['text'];
    $booking = new \app\models\Booking();
    $bookings = $booking->searchBookings($text);
    echo json_encode($bookings);
  }

}