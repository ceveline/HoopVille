<?php

namespace app\models;

use PDO;


class Profile extends \app\core\Model
{
    public $profile_id;
    public $user_id;
    public $first_name;
    public $last_name;
    public $phone;
    public $date_of_birth;

    public function getall()
    {
        $SQL = 'SELECT p.*, u.email FROM Profile p
                INNER JOIN User u ON p.user_id = u.user_id
                WHERE u.active = 1';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute();
        $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Profile');
        return $STMT->fetchAll();
    }

    public function searchProfiles($query)
    {
        $SQL = 'SELECT p.*, u.email FROM Profile p
                INNER JOIN User u ON p.user_id = u.user_id
                WHERE (p.first_name LIKE :query OR p.last_name LIKE :query OR p.phone LIKE :query OR u.email LIKE :query) 
                AND u.active = 1';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute(['query' => '%' . $query . '%']);
        $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Profile');
        return $STMT->fetchAll();
    }

    public function getProfileById($id)
    {
        $SQL = 'SELECT * FROM Profile WHERE profile_id = :id';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute(['id' => $id]);
        return $STMT->fetch(PDO::FETCH_OBJ);
    }

    public function updateActiveStatus($id, $active)
    {
        $SQL = 'UPDATE User SET active = :active WHERE user_id = :id';
        $STMT = self::$_conn->prepare($SQL);
        return $STMT->execute(['active' => $active, 'id' => $id]);
    }
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

    // public function getAll() {
    //     $SQL = 'SELECT * FROM Profile';
    //     $STMT = self::$_conn->prepare($SQL);
    //     $STMT->execute();

    //     $STMT->setFetchMode(PDO::FETCH_CLASS,'app\models\Profile');//set the type of data returned by fetches
	// 	return $STMT->fetchAll();
    // }

    public function getByUserId($user_id) {
        $SQL = 'SELECT * FROM Profile WHERE user_id = :user_id';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute(['user_id'=>$user_id]);
        
        $STMT->setFetchMode(PDO::FETCH_CLASS,'app\models\Profile');
        return $STMT->fetch();
    }
    // To display the details about the client from the admin side

    public function getMembershipByUserId($userId)
{
    $SQL = 'SELECT * FROM Membership WHERE user_id = :userId';
    $STMT = self::$_conn->prepare($SQL);
    $STMT->execute(['userId' => $userId]);
    return $STMT->fetch(PDO::FETCH_OBJ);
}

public function getBookingsByUserId($userId)
{
    $SQL = 'SELECT * FROM Booking WHERE user_id = :userId';
    $STMT = self::$_conn->prepare($SQL);
    $STMT->execute(['userId' => $userId]);
    return $STMT->fetchAll(PDO::FETCH_OBJ);
}

public function getCampsByUserId($userId)
{
    $SQL = 'SELECT c.*, CONCAT(g.first_name, " ", g.last_name) AS guest_name
            FROM Camp c
            LEFT JOIN Guest g ON c.guest_id = g.guest_id
            WHERE c.user_id = :userId';
    $STMT = self::$_conn->prepare($SQL);
    $STMT->execute(['userId' => $userId]);
    return $STMT->fetchAll(PDO::FETCH_OBJ);
}


public function getProfileByIdDetails($id)
{
    $SQL = 'SELECT p.*, u.email 
            FROM Profile p
            INNER JOIN User u ON p.user_id = u.user_id
            WHERE p.profile_id = :id';
    $STMT = self::$_conn->prepare($SQL);
    $STMT->execute(['id' => $id]);
    return $STMT->fetch(PDO::FETCH_OBJ);
}



}