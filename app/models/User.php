<?php

namespace app\models;

use PDO;


class User extends \app\core\Model
{
    public $user_id;
    public $email;
    public $password_hash;
    public $active;

    public function insert()
    {
        $SQL = 'INSERT INTO User (email, password_hash, active) VALUES (:email, :password_hash, :active)';

        // prepare statement
        $STMT = self::$_conn->prepare($SQL);

        // set the value of active to 1
        $active = 1;

        // execute the statement
        $data = [
            'email' => $this->email,
            'password_hash' => $this->password_hash,
            'active' => $active
        ];

        $STMT->execute($data);
    }


    //getById -> Read
    public function getById($user_id)
    {
        //statement
        $SQL = 'SELECT * FROM User WHERE user_id = :user_id';

        //prepare statement
        $STMT = self::$_conn->prepare($SQL);

        //execute the statement
        $data = ['user_id' => $user_id];

        $STMT->execute($data);

        //fetch the data
        $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\User');

        return $STMT->fetch();
    }

    public function getByEmail($email)
    {
        //statement
        $SQL = 'SELECT * FROM User WHERE email = :email';

        //prepare statement
        $STMT = self::$_conn->prepare($SQL);

        //execute the statement
        $data = ['email' => $email];

        $STMT->execute($data);

        //fetch the data
        $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\User');

        return $STMT->fetch();
    }

    // User side: generate the token
    public function updateResetToken($email, $tokenHash, $expiry)
    {
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

    // User side: will check the if the token matches
    public function getByResetTokenHash($tokenHash)
    {
        $sql = "SELECT * FROM User WHERE reset_token_hash = ?";
        $stmt = self::$_conn->prepare($sql);
        $stmt->execute([$tokenHash]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // User side: will make sure to add the new password and set the propreties of token to null
    public function updatePasswordAndRemoveToken($userId, $passwordHash)
    {
        $sql = "UPDATE User
            SET password_hash = :password_hash,
                reset_token_hash = NULL,
                reset_token_expires_at = NULL
            WHERE user_id = :user_id";

        $stmt = self::$_conn->prepare($sql);

        return $stmt->execute(['password_hash' => $passwordHash, 'user_id' => $userId]);
    }

}