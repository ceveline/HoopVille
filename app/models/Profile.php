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
}