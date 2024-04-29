<?php

namespace app\models;

use PDO;


class Membership extends \app\core\Model
{
    public $membership_id;
    public $membership_type;
    public $user_id;
    public $start_date;
    public $end_date;


    //insert -> Create
    public function insert() {
        //statement
        $SQL = 'INSERT INTO Membership (membership_type, user_id, start_date, end_date) 
            VALUES (:membership_type, :user_id, :start_date, :end_date)';

        //prepare statement
        $STMT = self::$_conn->prepare($SQL);

        //execute the statement
        $data = ['membership_type'=> $this->membership_type,
                'user_id'=> $this->user_id,
                'start_date'=> $this->start_date, 
                'end_date'=> $this->end_date
            ];
        
        $STMT->execute($data);
    }
    //get by user id

    //edit membership by id

    //cancel => change status to cancelled => 48 hours before

    //delete => admin

}