<?php

namespace app\controllers;

class Review extends \app\core\Controller
{

  
    //creating a review on the user end
    #[\app\filters\Login]
    #[\app\filters\User\HasPurchase]
    public function create()
    {
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
        $review = new \app\models\Review(); //instance of review class
  
        //!!!!!!! change to session id when branches are merged
        $review->user_id = $_SESSION['user_id']; //user_id in the instace
        $review->review_text = $_POST['review_text']; //post to grab text and rating
        $review->rating = $_POST['rating'];
        $review->type = $_POST['purchase_type'];
  
  
        $review->insert(); //inserting into db
  
  
  
        header('location:/User/myAccount'); //redirecting user to the general review page
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
#[\app\filters\Login]
  public function edit()
  {
    $review = new \app\models\Review();
    $review = $review->getReviewById($_GET['id']);
   

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

      $review->review_text = $_POST['review_text'];
      $review->rating = $_POST['rating'];
      
      $review->update();

      header('location:/User/review/list');
    } else {
      $this->view('User/review/edit', $review, true);
    }


  }



  #[\app\filters\Login]
  
  public function delete()
  {

      $review = new \app\models\Review();
      $review = $review->getReviewById($_GET['id']);
   

      $review->delete($_GET['id']);
   
    // no need for else, redirecting user to the same place
    header('location:/User/myAccount');
  }

  

  //Shows all Reviews that belong to one user

  public function list(){
    $review = new \app\models\Review(); //instance of review class
    $reviews = $review->getAll(); //getting all the reviews


    $this->view('User/review/list', $reviews,true);
  }

    // Admin side: display general info about a review
    function index()
    {
      $reviewModel = new \app\models\Review();
      $reviews = $reviewModel->getAllUserNames();
  
      $this->view('/Admin/Review/list', ['reviews' => $reviews], true);
    }
  
    // Admin side: delete a specific review
    function deleteReview($id)
    {
      $review = new \app\models\Review();
      $review->delete($id);
  
      header('location:/Admin/Review/list'); //change this
    }
  
    // Admin side: search by name
    public function search()
    {
      if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['query'])) {
        $query = $_GET['query'];
  
        $reviewModel = new \app\models\Review();
        $reviews = $reviewModel->searchReviews($query);
  
        $data = ['reviews' => $reviews];
        $this->view('Admin/Review/list', $data, true);
      } else {
        // If no search query provided, redirect to viewAll method
        header('Location: /Admin/Review/list');
      }
    }
  
    // Admin side: filter by most or least stars
    public function filterByStars()
    {
      if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['filter'])) {
        $filter = $_GET['filter'];
  
        $reviewModel = new \app\models\Review();
        $reviews = $reviewModel->filterByStars($filter);
  
        $data = ['reviews' => $reviews];
        $this->view('Admin/Review/list', $data, true);
      } else {
        // If no filter provided, redirect to listAllReviewsUser method
        header('Location: /Admin/Review/list');
      }
    }
  
    // Admin side: will sure to display all info on the user with their review
    public function reviewDetails($id)
    {
      $reviewModel = new \app\models\Review();
      $review = $reviewModel->getReviewById($id);
  
      if ($review) {
        // Get user details
        $userDetails = $reviewModel->getUserDetails($review->user_id);
  
        $data = [
          'review' => $review,
          'userDetails' => $userDetails
        ];
  
        $this->view('Admin/Review/reviewDetails', $data, true);
      } else {
        header('Location: /error');
      }
    }
  
  
}



    

