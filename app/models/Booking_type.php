<?php

namespace app\models;

use PDO;

class Booking_type extends \app\core\Model
{

  public $booking_type;
  public $price;
  public $description; // ex: 2024-02-23

  // TBD
  public function update()
  {

  }

  // TBD
  public function delete()
  {

  }

  public function getBookingTypes()
  {
    $SQL = 'SELECT * FROM Booking_Type';
    $STMT = self::$_conn->prepare($SQL);
    $STMT->execute();

    $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Booking_type');
    return $STMT->fetchAll();
  }

}