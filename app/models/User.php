<?php

namespace app\models;

use PDO;


class User extends \app\core\Model
{
    public $user_id;
    public $email;
    public $password_hash;

    public function insert() {
        //statement
        $SQL = 'INSERT INTO User (email, password_hash) VALUES (:email, :password_hash)';

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
        $SQL = 'SELECT * FROM User WHERE user_id = :user_id';

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
        $SQL = 'SELECT * FROM User WHERE email = :email';

        //prepare statement
        $STMT = self::$_conn->prepare($SQL);

        //execute the statement
        $data = ['email'=> $email];
        
        $STMT->execute($data);

        //fetch the data
        $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\User');
        
        return $STMT->fetch();
    }

// Add a method to the User model to update reset token and expiry
public function updateResetToken($email, $tokenHash, $expiry) {
    $sql = "UPDATE User
            SET reset_token_hash = :token_hash,
            reset_token_expires_at = :expiry
            WHERE email = :email";
    
    $STMT = self::$_conn->prepare($sql);
    
    $STMT->bindParam(":token_hash", $tokenHash, PDO::PARAM_STR);
    $STMT->bindParam(":expiry", $expiry, PDO::PARAM_STR);
    $STMT->bindParam(":email", $email, PDO::PARAM_STR);
    
    if ($STMT->execute()) {
        return true; 
    } else {
        return false;
    }
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