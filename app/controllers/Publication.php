<?php

namespace app\controllers;

class Publication extends \app\core\Controller {

    //show all the public publications on the main menu
    #[\app\filters\Admin\IsAdmin]
    function index() {
        $publication = new \app\models\Publication();
        $publications = $publication->getAll();
        
        $this->view('Admin/Publication/list', ['publications' => $publications], true);
    }

    function list() {
        $publication = new \app\models\Publication();
        $publications = $publication->getAll();
        
        $this->view('User/Publication/list', ['publications' => $publications], true);
    }
    
    #[\app\filters\Admin\IsAdmin]
    function create() {
        date_default_timezone_set('America/New_York'); //to make sure the timestamp is EST time

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $publication = new \app\models\Publication();

            $publication->admin_id = $_SESSION['admin_id'];
            $publication->text = $_POST['text'];
            $publication->title = $_POST['title'];
            $publication->timestamp = date(__('Y-m-d H:i:s'));

            $publication->insert();

            header('location:/Admin/Publication/index'); //change to the admin dashboard
        }
        else {
            $this->view('Admin/Publication/create', null, true);
        }
    }

    //works
    #[\app\filters\Admin\IsAdmin]
    function edit($id) {
        date_default_timezone_set('America/New_York');

        $publication = new \app\models\Publication();
        $publication = $publication->getById($id);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $publication->title = $_POST['title'];
            $publication->text = $_POST['text'];
            $publication->timestamp = date(__('Y-m-d H:i:s'));

            $publication->update($id);

            header("location:/Publication/view/$id");
        } else {
            $this->view('Admin/Publication/edit', ['publication' => $publication], true);
        }
    }

    #[\app\filters\Admin\IsAdmin]
    function delete($id) {
        $publication = new \app\models\Publication();
		$publication->delete($id);

        header('location:/Admin/Publication/index'); //change this
    }

    #[\app\filters\Admin\IsAdmin]
    function viewPublication($id) {
        $publication = new \app\models\Publication();
        $publicationData = $publication->getById($id);

        $this->view("Admin/Publication/view", ['publication' => $publicationData], true);
    }

    function search() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $publication = new \app\models\Publication();
            $query = $_POST['query'];
            
            // Perform search by title or content
            $publicationsByTitle = $publication->getByTitle($query);
            $publicationsByContent = $publication->getByContent($query);
            
            // Merge the search results to remove duplicates
            $searchResults = array_merge($publicationsByTitle, $publicationsByContent);
            
            // Remove duplicate entries
            $searchResults = array_unique($searchResults, SORT_REGULAR);
            
            // Pass the search results to the view
            $this->view('User/Publication/list', ['publications' => $searchResults], true);
        } else {
            // If not a POST request, redirect to the main page
            header('location:/Publication');
        }
    }
}
