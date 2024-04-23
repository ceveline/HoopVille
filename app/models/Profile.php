<?php

namespace app\models;

use PDO;


class Profile extends \app\core\Model
{
    public $profile_id;
    public $user_id;
    public $password_hash;
    public $first_name;
    public $last_name;
    public $phone;
    public $date_of_birth;


    //insert -> Create
    public function insert() {
        //statement
        $SQL = 'INSERT INTO Profile (user_id, first_name, last_name, phone, date_of_birth) 
            VALUES (:user_id, :first_name, :last_name, :phone, :date_of_birth)';

        //prepare statement
        $STMT = self::$_conn->prepare($SQL);

        //execute the statement
        $data = ['user_id'=> $this->user_id,
                'first_name'=> $this->first_name, 
                'last_name'=> $this->last_name, 
                'phone'=> $this->phone, 
                'date_of_birth'=> $this->date_of_birth
            ];
        
        $STMT->execute($data);
    }
}