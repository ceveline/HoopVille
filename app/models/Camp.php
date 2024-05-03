<?php

namespace app\models;

use PDO;


class Camp extends \app\core\Model
{

    //Declaring variables from review table

  public $camp_id;
  public $camp_type;
  public $user_id;
  public $guest_id; //can be null
  public $timestamp;
  


    

   //get user camps with the user id
   
   public function insert()
   {
     //Timestamp and Review id in db automatically
     $SQL = 'INSERT INTO Camp(camp_type, user_id, guest_id, timestamp) VALUES (:camp_type, :user_id, :guest_id,)';
     $STMT = self::$_conn->prepare($SQL);
     $data = [
       'camp_type' => $this->camp_type,
       'user_id' => $this->user_id,
       'guest_id' => $this->guest_id,
     ];
     $STMT->execute($data);
   }

   //list camp type
   public function listCampTypes()
   {
     //Timestamp and Review id in db automatically
     $SQL = 'SELECT * FROM Camp_Type';
     $STMT = self::$_conn->prepare($SQL);
     $STMT->execute();

    $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Camp');
    return $STMT->fetchAll();
   }

   public function listUserCamps(){
    
   }

   

 

 

}