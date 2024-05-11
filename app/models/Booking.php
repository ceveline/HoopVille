<?php

namespace app\models;

use PDO;

class Booking extends \app\core\Model
{

  public $booking_id;
  public $booking_type;
  public $user_id;
  public $date; // ex: 2024-02-23
  public $start_time; // HH:MM:SS
  public $end_time; // HH:MM:SS
  public $status; // 1 app, 0 pending, 2 declined
  public $timestamp;

  // not from db 
  public $user;

  public $profile;
  public $first_name;
  public $last_name;
  public $email;


  public function insert()
  {
    $SQL = 'INSERT INTO Booking(booking_type, user_id, date, start_time, end_time, status) VALUES(:booking_type, :user_id, :date, :start_time, :end_time, :status)';
    $STMT = self::$_conn->prepare($SQL);
    $STMT->execute([
      'booking_type' => $this->booking_type,
      'user_id' => $this->user_id,
      'date' => $this->date,
      'start_time' => $this->start_time,
      'end_time' => $this->end_time,
      'status' => $this->status
    ]);
  }

  public function update()
  {
    $SQL = 'UPDATE Booking SET booking_type = :booking_type, date = :date, start_time = :start_time, end_time = :end_time, status = :status WHERE booking_id = :booking_id';

    $STMT = self::$_conn->prepare($SQL);
    $STMT->execute(
      [
        'booking_type' => $this->booking_type,
        'booking_id' => $this->booking_id,
        'date' => $this->date,
        'start_time' => $this->start_time,
        'end_time' => $this->end_time,
        'status' => $this->status
      ]
    );
  }

  public function delete()
  {
    $SQL = 'DELETE FROM Booking WHERE booking_id = :booking_id';

    $STMT = self::$_conn->prepare($SQL);
    $STMT->execute(['booking_id' => $this->booking_id]);
  }

  public function getBookingsByUserId(int $user_id)
  {
    $SQL = 'SELECT * FROM Booking WHERE user_id = :user_id';
    $STMT = self::$_conn->prepare($SQL);
    $STMT->execute(
      ['user_id' => $user_id]
    );

    $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Booking');
    return $STMT->fetchAll();
  }

  public function getBookings()
  {
    $SQL = 'SELECT * FROM Booking ORDER BY date DESC';
    $STMT = self::$_conn->prepare($SQL);
    $STMT->execute();

    $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Booking');
    return $STMT->fetchAll();
  }

  public function getBookingById($booking_id)
  {
    $SQL = 'SELECT * FROM Booking WHERE booking_id = :booking_id';
    $STMT = self::$_conn->prepare($SQL);
    $STMT->execute(['booking_id' => $booking_id]);
    $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Booking');
    return $STMT->fetch();
  }

  public function getBookingsByStatus($status)
  {

    // JOIN WITH USER AND PROFILE
    $SQL = 'SELECT * FROM Booking WHERE status = :status ORDER BY date DESC';
    $STMT = self::$_conn->prepare($SQL);
    $STMT->execute(['status' => $status]);

    $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Booking');
    return $STMT->fetchAll();
  }

  public function getBookingsByDate($date) // passed in as '2024-04-21'
  {
    $SQL = 'SELECT * FROM Booking WHERE date = :date';

    $STMT = self::$_conn->prepare($SQL);
    $STMT->execute(['date' => $date]);
    $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Booking');
    return $STMT->fetchAll();
  }


  public function searchBookingsByEmail($email)
  {
    $SQL = 'SELECT 
      *
    FROM Booking 
    JOIN Profile ON Booking.user_id = Profile.user_id
    JOIN User ON Profile.user_id = User.user_id
    WHERE 
       User.email LIKE :textSearch';

    $STMT = self::$_conn->prepare($SQL);
    $STMT->execute(['textSearch' => "%" . $email . "%"]);
    $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Booking');
    return $STMT->fetchAll();
  }



}