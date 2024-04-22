<?php

namespace app\controllers;

class Review extends \app\core\Controller
{

  
    //creating a review on the user end
  public function create()
  {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

      $review = new \app\models\Review(); //instance of review class

      $review->user_id = $_SESSION['user_id']; //user_id in the instace
      $review->review_text = $_POST['review_text']; //post to grab text and rating
      $review->rating = $_POST['rating'];

      $review->insert(); //inserting into db

      header('location:/User/Review/list'); //redirecting user to the general review page
    } else {
      $this->view('User/review/create', null, true); 
      
    }
  }

  //Showing all reviews to the user
  public function listAllReviewsUser()
  {
    $review = new \app\models\Review(); //instance of review class
    $reviews = $review->getAll(); //getting all the reviews

   //TBD to add logic to show username information

    $this->view('User/Review/list', $reviews);
  }

//Edit a review
  public function edit()
  {
    $review = new \app\models\Review();
    $review = $review->getReviewById($_GET['id']);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

      $review->review_text = $_POST['review_text'];
      $review->rating = $_POST['rating'];
      
      $review->update();

      header('location:/User/Review/list');
    } else {
      $this->view('User/Review/edit', $review);
    }

  }
  public function delete()
  {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

      $review = new \app\models\Review();
      $review = $review->getReviewById($_GET['id']);
   

      $review->delete();
    }

    // no need for else, redirecting user to the same place
    header('location:/User/Review/list');
  }

  //Shows all Reviews that belong to one user
  public function listUsersReviews(){
    $review = new \app\models\Review(); //instance of review class
    $review->user_id = $_GET['id'];
    $reviews = $review->getUserReviews(); //getting all the reviews

   //TBD to add logic to show username information

    $this->view('User/Review/list', $reviews);
  }
  
}