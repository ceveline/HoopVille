<?php

namespace app\controllers;

class Profile extends \app\core\Controller {

    public function viewAll(){
        $profileModel = new \app\models\Profile();
        $profile = $profileModel->getall();
        
        $data = ['profiles' => $profile];
        $this->view('Admin/User/view', $data);
        
    }

    public function search()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['query'])) {
            $query = $_GET['query'];

            $profileModel = new \app\models\Profile();
            $profiles = $profileModel->searchProfiles($query);

            $data = ['profiles' => $profiles];
            $this->view('Admin/User/view', $data);
        } else {
            // If no search query provided, redirect to viewAll method
            header('Location: /Admin/User/view');
        }
    }
    public function delete($id)
    {

        // strvl converts the id into a string.
        // ctype_digit function will check the following string to see if it 
        // numerical digits or not
        if (!isset($id) || !ctype_digit(strval($id))) {
            header('Location: /Admin/User/view');
            return;
        }

        $profileModel = new \app\models\Profile();
        $profile = $profileModel->getProfileById($id);

        // Check if profile exists
        if (!$profile) {
            // Redirect to viewAll method if profile doesn't exist
            header('Location: /Admin/User/view');
            return;
        }

        // Update the active status to 0 (inactive)
        $success = $profileModel->updateActiveStatus($id, 0);

        if ($success) {
            // Redirect to viewAll method after successful update
            header('Location: /Admin/User/view');
        } else {
            header('Location: /Admin/User/view');
        }
    }

}
