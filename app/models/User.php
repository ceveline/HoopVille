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

  //update password for forget password
  public function updatePassword($email)
  {
    $SQL = 'UPDATE User SET password_hash=:password_hash
                    WHERE email = :email';
    $STMT = self::$_conn->prepare($SQL);
    $STMT->execute([
      'email' => $email,
      'password_hash' => $this->password_hash,
    ]);
  }

}