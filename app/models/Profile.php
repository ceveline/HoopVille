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

    // Admin View: display general info about the users as well as connecting with the user table to get the email where the user account has to be active (active = 1)
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

    // Admin View: to search the users based on their first and last name, phone number and email where the user account has to be active (active = 1)
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

    // Admin side: delete the user by desactivating the user's account (active = 0)
    public function updateActiveStatus($id, $active)
    {
        $SQL = 'UPDATE User SET active = :active WHERE user_id = :id';
        $STMT = self::$_conn->prepare($SQL);
        return $STMT->execute(['active' => $active, 'id' => $id]);
    }
    //insert -> Create
    public function insert()
    {
        //statement
        $SQL = 'INSERT INTO Profile (user_id, first_name, last_name, phone, date_of_birth) 
            VALUES (:user_id, :first_name, :last_name, :phone, :date_of_birth)';

        //prepare statement
        $STMT = self::$_conn->prepare($SQL);

        //execute the statement
        $data = [
            'user_id' => $this->user_id,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'phone' => $this->phone,
            'date_of_birth' => $this->date_of_birth
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

    public function getByUserId($user_id)
    {
        $SQL = 'SELECT * FROM Profile WHERE user_id = :user_id';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute(['user_id' => $user_id]);

        $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Profile');
        return $STMT->fetch();
    }

    // Admin View: display detailed info about the users as well as connecting with the user table to get the email.
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