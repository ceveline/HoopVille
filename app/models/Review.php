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

  public $type;
  public $timestamp;



  //Insert statement to add a review

  public function insert()
  {
    //Timestamp and Review id in db automatically
    $SQL = 'INSERT INTO Review(user_id, rating, review_text, type) VALUES (:user_id, :rating, :review_text, :type)';
    $STMT = self::$_conn->prepare($SQL);
    $data = [
      'user_id' => $this->user_id,
      'rating' => $this->rating,
      'review_text' => $this->review_text,
      'type' => $this->type

    ];
    $STMT->execute($data);


  }

  //getUserReviews: Allows a user to list all the reviews they have created
  public function getUserReviews(int $user_id)
  {
    $SQL = 'SELECT * FROM Review WHERE user_id = :user_id
    ORDER BY timestamp DESC;';
    $STMT = self::$_conn->prepare($SQL);
    $STMT->execute(['user_id' => $user_id]);
    $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Review');
    return $STMT->fetchAll();
  }


  //getAll: Allows a user or admin to see all reviews. Reviews show everything including the author's first and last name
  //Names are fetched by joining to the user table and then the profile by making use of the user_id
  public function getAll()
  {

    $SQL = 'SELECT Review.*
    FROM Review
    ORDER BY Review.timestamp DESC;';

    $STMT = self::$_conn->prepare($SQL);
    $STMT->execute();
    $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Review');
    return $STMT->fetchAll();
  }


  //Update Method to update a review text
  public function update()
  {
    $SQL = 'UPDATE Review SET review_text = :review_text, rating = :rating
        WHERE review_id = :review_id';

    $STMT = self::$_conn->prepare($SQL);
    $STMT->execute(
      [
        'review_text' => $this->review_text,
        'review_id' => $this->review_id,
        'rating' => $this->rating
      ]
    );
  }

  //Getting a review by the id
  public function getReviewById(int $id)
  {
    $SQL = 'SELECT Review.*
    FROM Review
    WHERE review_id = :review_id';

    $STMT = self::$_conn->prepare($SQL);
    $STMT->execute(['review_id' => $id]);
    $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Review');
    return $STMT->fetch();
  }

  //Deleting a review by the ID
  public function delete($review_id)
  {
    $SQL = 'DELETE FROM Review WHERE review_id = :review_id';
    $STMT = self::$_conn->prepare($SQL);
    $STMT->execute(['review_id' => $review_id]);
  }

  // Admin side: display info about review and connect the profile to get the first and last name
  public function getAllUserNames()
  {
    $SQL = 'SELECT r.*, p.first_name, p.last_name
              FROM Review r
              INNER JOIN User u ON r.user_id = u.user_id
              INNER JOIN Profile p ON u.user_id = p.user_id';

    $STMT = self::$_conn->prepare($SQL);
    $STMT->execute();
    $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Review');
    return $STMT->fetchAll();
  }

  // Admin side: searches by first and last name
  public function searchReviews($query)
  {
    $SQL = 'SELECT r.*, p.first_name, p.last_name
              FROM Review r
              INNER JOIN User u ON r.user_id = u.user_id
              INNER JOIN Profile p ON u.user_id = p.user_id
              WHERE (p.first_name LIKE :query OR p.last_name LIKE :query)';

    $STMT = self::$_conn->prepare($SQL);
    $STMT->execute(['query' => '%' . $query . '%']);
    $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Review');
    return $STMT->fetchAll();
  }

  // Admin side: will filter by start (most or least rated)
  public function filterByStars($filter)
  {
    $SQL = 'SELECT r.*, p.first_name, p.last_name
            FROM Review r
            INNER JOIN User u ON r.user_id = u.user_id
            INNER JOIN Profile p ON u.user_id = p.user_id
            ORDER BY rating';

    if ($filter === 'most_stars') {
      $SQL .= ' DESC';
    } elseif ($filter === 'least_stars') {
      $SQL .= ' ASC';
    }

    $STMT = self::$_conn->prepare($SQL);
    $STMT->execute();
    $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Review');
    return $STMT->fetchAll();
  }

  // Admin side: display info details about the user who made the review
  public function getUserDetails($user_id)
  {
    $SQL = 'SELECT p.profile_id, p.first_name, p.last_name, p.phone, u.email
            FROM Profile p
            INNER JOIN User u ON p.user_id = u.user_id
            WHERE p.user_id = :user_id';
    $STMT = self::$_conn->prepare($SQL);
    $STMT->execute(['user_id' => $user_id]);
    return $STMT->fetch(PDO::FETCH_ASSOC);
  }


}