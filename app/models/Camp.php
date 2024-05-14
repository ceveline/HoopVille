<?php

namespace app\models;

use PDO;


class Camp extends \app\core\Model
{

  //Declaring variables from table

  public $camp_id;
  public $camp_type;
  public $user_id;
  public $guest_id; //can be null
  public $timestamp;





  //get user camps with the user id

  public function insert()
  {
    //Timestamp and Review id in db automatically
    $SQL = 'INSERT INTO Camp(camp_type, user_id, guest_id, timestamp) VALUES (:camp_type, :user_id, :guest_id, :timestamp)';
    $STMT = self::$_conn->prepare($SQL);
    $data = [
      'camp_type' => $this->camp_type,
      'user_id' => $this->user_id,
      'guest_id' => $this->guest_id,
      'timestamp' => $this->timestamp
    ];
    $STMT->execute($data);
  }

  //list camp type


  public function listUserCamps($user_id)
  {
    $SQL = 'SELECT * FROM Camp WHERE user_id = :user_id)';
    $STMT = self::$_conn->prepare($SQL);
    $data = [

      'user_id' => $user_id,

    ];
    $STMT->execute();
    $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Camp');
    return $STMT->fetch();

  }



  //list all camps
  public function listAllCamps()
  {
    // Assuming you have a database connection stored in $_conn
    $SQL = "SELECT Camp.*, Guest.*
            FROM Camp
            INNER JOIN Guest ON Camp.guest_id = Guest.guest_id"; // Assuming 'guest_id' is the foreign key in the camps table

    $STMT = self::$_conn->prepare($SQL);
    $STMT->execute();

    // Set the fetch mode to fetch associative arrays
    $STMT->setFetchMode(PDO::FETCH_ASSOC);

    // Fetch all camp registrations with their associated guests
    $campsWithGuests = $STMT->fetchAll();

    return $campsWithGuests;
  }


  // Admin side: it will delete the camp as well as the guest connected to it
  public function deleteById($camp_id)
  {
    $SQL = 'DELETE FROM Camp WHERE camp_id = :camp_id';
    $STMT = self::$_conn->prepare($SQL);
    $STMT->execute(['camp_id' => $camp_id]);

    // Check if any guest is associated with this camp
    $SQL_guest = 'SELECT guest_id FROM Camp WHERE camp_id = :camp_id';
    $STMT_guest = self::$_conn->prepare($SQL_guest);
    $STMT_guest->execute(['camp_id' => $camp_id]);
    $guest_id = $STMT_guest->fetchColumn();

    if ($guest_id) {
      // Delete the associated guest record
      $SQL_delete_guest = 'DELETE FROM Guest WHERE guest_id = :guest_id';
      $STMT_delete_guest = self::$_conn->prepare($SQL_delete_guest);
      $STMT_delete_guest->execute(['guest_id' => $guest_id]);
    }
  }









}