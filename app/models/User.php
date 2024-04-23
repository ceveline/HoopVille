<?php

namespace app\models\User;

use PDO;


class User extends \app\core\Model
{
    public $user_id;
    public $email;
    public $password_hash;

    //insert -> Create
    public function insert() {
        //statement
        $SQL = 'INSERT INTO user (email, password_hash) VALUES (:email, :password_hash)';

        //prepare statement
        $STMT = self::$_conn->prepare($SQL);

        //execute the statement
        $data = ['email'=> $this->email, 
                'password_hash'=> $this->password_hash];
        
        $STMT->execute($data);
    }

    //getById -> Read
    public function getById($user_id) {
        //statement
        $SQL = 'SELECT * FROM user WHERE user_id = :user_id';

        //prepare statement
        $STMT = self::$_conn->prepare($SQL);

        //execute the statement
        $data = ['user_id'=> $user_id];
        
        $STMT->execute($data);

        //fetch the data
        $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\User');
        
        return $STMT->fetch();
    }

    public function getByEmail($email) {
        //statement
        $SQL = 'SELECT * FROM user WHERE email = :email';

        //prepare statement
        $STMT = self::$_conn->prepare($SQL);

        //execute the statement
        $data = ['email'=> $email];
        
        $STMT->execute($data);

        //fetch the data
        $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\User');
        
        return $STMT->fetch();
    }

    //update password for forget password
    // public function updatePassword($email) {
    //     $SQL = 'UPDATE user SET password_hash=:password_hash
    //                 WHERE email = :email';
    //     $STMT = self::$_conn->prepare($SQL);
    //     $STMT->execute([
    //         'user_id'=>$user_id,
    //         'password_hash'=>$this->password_hash,
    //     ]);
    // }

}