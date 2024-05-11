<?php
namespace app\filters\Booking;

#[\Attribute]
class AdminUsersBooking implements \app\core\AccessFilter
{

  public function redirected()
  {

    if (!isset($_GET['id'])) {
      header('location:/Home');
    }

    $bookingId = $_GET['id'];
    $booking = new \app\models\Booking();
    $booking = $booking->getBookingById($bookingId);

    // if the user is logged and it's their booking, or if admin is logged in
    if ((isset($_SESSION['user_id']) && $booking->user_id == $_SESSION['user_id']) || isset($_SESSION['admin_id'])) {
      return false;
    }

    header('location:/Home');
    return true;
  }

}