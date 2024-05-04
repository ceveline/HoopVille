<?php

namespace app\models;

use PDO;


class CampType extends \app\core\Model
{

   
public $camp_type;
    public $price;
    public $description;
    public $start_date;
    public $end_date;
    public $registration_start;
    public $registration_end;

    public function getAll()
    {
        $SQL = 'SELECT * FROM Camp_Type';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute();

        $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\CampType');
        return $STMT->fetchAll();
    }

    public function getByType($camp_type) {
        $SQL = 'SELECT * FROM Camp_Type where camp_type=:camp_type';
        $STMT = self::$_conn->prepare($SQL);

        $STMT->execute(['camp_type'=>$camp_type]);
        
        $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\CampType');
        return $STMT->fetch();   
    }

}