<?php

namespace app\controllers;

class Review extends \app\core\Controller {

    //show all the public publications on the main menu
    function index() {
        $review = new \app\models\Review();
        $reviews = $review->getAll();
        
        $this->view('/Admin/Review/list', ['review' => $reviews], true);
    }
    
    function delete($id) {
        $review = new \app\models\Review();
		$review->delete($id);

        header('location:/Admin/Review/list'); //change this
    }

}
