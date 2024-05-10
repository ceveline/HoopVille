<?php

namespace app\controllers;


class Booking_type extends \app\core\Controller
{


  function getBookingTypes()
  {
    $booking_type = new \app\models\Booking_type();
    $booking_types = $booking_type->getBookingTypes();
    echo json_encode($booking_types);
  }

}