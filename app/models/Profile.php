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
    

}