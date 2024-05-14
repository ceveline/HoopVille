<?php

namespace app\controllers;

class Review extends \app\core\Controller
{

  
    //creating a review on the user end
    //#[\app\filters\Login]
    //#[\app\filters\User\HasPurchase]

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
  
  
  
      //  header('location:/User/review/list'); //redirecting user to the general review page
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
//#[\app\filters\Login]
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

  //#[\app\filters\Login]

  
  public function delete()
  {

      $review = new \app\models\Review();
      $review = $review->getReviewById($_GET['id']);
   

      $review->delete($_GET['id']);
   
    // no need for else, redirecting user to the same place
    header('location:/User/myAccount');
  }

  //Shows all Reviews that belong to one user

  #[\app\filters\Login]
  public function list(){
    $review = new \app\models\Review(); //instance of review class
    $reviews = $review->getAll(); //getting all the reviews


    $this->view('User/review/list', $reviews,true);
  }
  
}


    
    function delete($id) {
        $review = new \app\models\Review();
		$review->delete($id);

        header('location:/Admin/Review/list'); //change this
    }

