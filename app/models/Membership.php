<?php

namespace app\models\Membership;

use PDO;


class Membership extends \app\core\Model
{
<<<<<<< Updated upstream
=======
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
    public function getAll(){
        $SQL = 'SELECT * FROM Membership';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute();

        $STMT->setFetchMode(PDO::FETCH_CLASS,'app\models\Membership');//set the type of data returned by fetches
		return $STMT->fetchAll();
    }
    //get by user id
    public function getMembershipByUserId($user_id){
        $SQL = 'SELECT * FROM Membership WHERE user_id = :user_id';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute(['user_id'=>$user_id]);
        
        $STMT->setFetchMode(PDO::FETCH_CLASS,'app\models\Membership');
        return $STMT->fetch();
    }

    public function getMembershipById($membership_id){
        $SQL = 'SELECT * FROM Membership WHERE membership_id = :membership_id';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute(['membership_id'=>$membership_id]);
        
        $STMT->setFetchMode(PDO::FETCH_CLASS,'app\models\Membership');
        return $STMT->fetch();
    }

    public function update($membership_id) {
        $SQL = 'UPDATE Membership 
                SET membership_type=:membership_type, start_date=:start_date
                WHERE membership_id = :membership_id';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute([
            'membership_id'=>$membership_id,
            'membership_type'=>$this->membership_type,
            'start_date'=>$this->start_date,
        ]);
    }

    public function updateAdmin($membership_id) {
        $SQL = 'UPDATE Membership 
                SET membership_type=:membership_type
                WHERE membership_id = :membership_id';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute([
            'membership_id'=>$membership_id,
            'membership_type'=>$this->membership_type
        ]);
    }

    //cancel => change status to cancelled => 48 hours before

    //delete => admin
    public function deleteById($membership_id) {
        $SQL = 'DELETE FROM Membership WHERE membership_id = :membership_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['membership_id'=> $membership_id] //no
		);
    }

    public function delete($userid){
        $SQL = 'DELETE FROM Membership WHERE user_id = :user_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['user_id'=> $userid] 
		);
    }

    
>>>>>>> Stashed changes
    

}