<?php

namespace app\models;

use PDO;


class Guest extends \app\core\Model
{

    //Declaring variables from review table

  public $guest_id;
  public $first_name;
  public $last_name;
  public $date_of_birth; 

  //insert
  public function insert()
  {
    
    $SQL = 'INSERT INTO Guest(first_name, last_name, date_of_birth) VALUES (:first_name, :last_name, :date_of_birth)';
    $STMT = self::$_conn->prepare($SQL);
    $data = [
      'first_name' => $this->first_name,
      'last_name' => $this->last_name,
      'date_of_birth' => $this->date_of_birth,
    ];
    $STMT->execute($data);

    
  }

  public function getRecent(){
    $SQL = 'SELECT LAST_INSERT_ID() AS last_inserted_id;';
    $STMT = self::$_conn->prepare($SQL);
   
    $STMT->execute();
    return $STMT->fetch(PDO::FETCH_ASSOC)['last_inserted_id'];
  }

  public function getById(int $id)
  {
    $SQL = 'SELECT Guest.*
    FROM Guest
    WHERE guest_id = :guest_id';

    $STMT = self::$_conn->prepare($SQL);
    $STMT->execute(['guest_id' => $id]);
    $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Guest');
    return $STMT->fetch();
  }

  public function getForUser(int $id)
  {
    $SQL = 'SELECT Guest.*
    FROM Guest
    JOIN Camp
    ON Camp.guest_id
    WHERE guest_id = :guest_id';

    $STMT = self::$_conn->prepare($SQL);
    $STMT->execute(['guest_id' => $id]);
    $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Guest');
    return $STMT->fetch();
  }
  
  

  

   

 

 

}