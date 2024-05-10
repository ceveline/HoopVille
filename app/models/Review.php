<?php

namespace app\models;

use PDO;


class Review extends \app\core\Model
{

    //Declaring variables from review table

  public $review_id;
  public $user_id;
  public $rating;
  public $review_text;
  public $timestamp;
  


    //Insert statement to add a review

    public function insert()
    {
      //Timestamp and Review id in db automatically
      $SQL = 'INSERT INTO Review(user_id, rating, review_text) VALUES (:user_id, :rating, :review_text)';
      $STMT = self::$_conn->prepare($SQL);
      $data = [
        'user_id' => $this->user_id,
        'rating' => $this->rating,
        'review_text' => $this->review_text,
      ];
      $STMT->execute($data);
    }

  //getUserReviews: Allows a user to list all the reviews they have created
  public function getUserReviews(int $user_id)
  {
    $SQL = 'SELECT * FROM Review WHERE user_id = :user_id
    ORDER BY p.timestamp DESC;';
    $STMT = self::$_conn->prepare($SQL);
    $STMT->execute(['user_id' => $user_id]);
    $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Review');
    return $STMT->fetchAll();
  }


  //getAll: Allows a user or admin to see all reviews. Reviews show everything including the author's first and last name
  //Names are fetched by joining to the user table and then the profile by making use of the user_id
  public function getAll()
  {
    
    $SQL = 'SELECT Review.*, Profile.first_name, Profile.last_name
    FROM Review
    JOIN User ON Review.user_id = User.user_id
    JOIN Profile ON User.user_id = Profile.user_id
    ORDER BY Review.timestamp DESC;';

    $STMT = self::$_conn->prepare($SQL);
    $STMT->execute();
    $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Review');
    return $STMT->fetchAll();
  }


  //Update Method to update a review text
  public function update()
  {
    $SQL = 'UPDATE Review SET review_text = :review_text
        WHERE review_id = :review_id';

    $STMT = self::$_conn->prepare($SQL);
    $STMT->execute(
      [
        'review_text' => $this->review_text,
        'review_id' => $this->review_id,
      ]
    );
  }

  //Deleting a review by the ID
  public function delete($review_id)
  {
    $SQL = 'DELETE FROM Review WHERE review_id = :review_id';
    $STMT = self::$_conn->prepare($SQL);
    $STMT->execute(['review_id' => $review_id]);
  }

}