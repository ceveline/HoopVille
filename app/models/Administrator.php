<?php

namespace app\models;

use PDO;


class Administrator extends \app\core\Model
{
  public $admin_id;
  public $email;
  public $password_hash;

  public $secret;

  public function add2FA()
  {
    //change anything but the PK
    $SQL = 'UPDATE Administrator SET secret = :secret WHERE admin_id = :admin_id';
    $STMT = self::$_conn->prepare($SQL);
    $STMT->execute([
      'admin_id' => $this->admin_id,
      'secret' => $this->secret
    ]);
  }

  public function insert()
  {
    //statement
    $SQL = 'INSERT INTO Administrator (email, password_hash) VALUES (:email, :password_hash)';

    //prepare statement
    $STMT = self::$_conn->prepare($SQL);

    //execute the statement
    $data = [
      'email' => $this->email,
      'password_hash' => $this->password_hash
    ];

    $STMT->execute($data);
  }

  //getById -> Read
  public function getById($admin_id)
  {
    //statement
    $SQL = 'SELECT * FROM Administrator WHERE admin_id = :admin_id';

    //prepare statement
    $STMT = self::$_conn->prepare($SQL);

    //execute the statement
    $data = ['admin_id' => $admin_id];

    $STMT->execute($data);

    //fetch the data
    $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Administrator');

    return $STMT->fetch();
  }

  public function getByEmail($email)
  {
    //statement
    $SQL = 'SELECT * FROM Administrator WHERE email = :email';

    //prepare statement
    $STMT = self::$_conn->prepare($SQL);

    //execute the statement
    $data = ['email' => $email];

    $STMT->execute($data);

    //fetch the data
    $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Administrator');

    return $STMT->fetch();
  }

}