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
       'timestamp'=>$this->timestamp
     ];
     $STMT->execute($data);
   }

   //list camp type
   

   public function listUserCamps($user_id){
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
   public function listAllCamps(){
    $SQL = 'SELECT * FROM Camp';
     $STMT = self::$_conn->prepare($SQL);
     $STMT->execute();
     $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Camp');
     return $STMT->fetchAll();
   }




   

 

 

}