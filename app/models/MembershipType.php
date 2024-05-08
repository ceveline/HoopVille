<?php

namespace app\models;

use PDO;


class Membership_Type extends \app\core\Model
{

    public $membership_type;
    public $monthly_price;
    public $description;

    public function getAll()
    {
        $SQL = 'SELECT * FROM Membership_Type';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute();

        $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\MembershipType');
        return $STMT->fetchAll();
    }

    public function getByType($membership_type) {
        $SQL = 'SELECT * FROM Membership_Type where membership_type=:membership_type';
        $STMT = self::$_conn->prepare($SQL);

        $STMT->execute(['membership_type'=>$membership_type]);
        
        $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Membership_type');
        return $STMT->fetch();   
    }

}