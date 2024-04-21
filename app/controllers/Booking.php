<?php

namespace app\controllers;


class Booking extends \app\core\Controller
{

  // only for admin
  function listAdmin()
  {
    $booking = new \app\models\Booking();
    $bookings = $booking->getBookings();

    $this->view('User/Bookings/list', $bookings, true);
  }

  function listUser()
  {
    // *****************************************
    $user_id = $_GET['id'];
    $booking = new \app\models\Booking();
    $userBookings = $booking->getBookingsByUserId($user_id);
    $this->view('User/Bookings/list', $userBookings, true);
  }

  // must be admin or your publication
  function index()
  {
    // get id = params *********************

  }

  function create()
  {
    $this->view('User/Bookings/create', null, true);
  }

  function update()
  {

  }

  function delete()
  {

  }

  function getDisabledDates($booking_type)
  {

    // echo dates;
  }

}