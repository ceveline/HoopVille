<?php

namespace app\models;

use PDO;


class Membership_type extends \app\core\Model
{

    public $membership_type;
    public $monthly_price;
    public $description;

    public function getAll()
    {
        $SQL = 'SELECT * FROM Membership_Type';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute();

        $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Membership_type');
        return $STMT->fetchAll();
    }

}