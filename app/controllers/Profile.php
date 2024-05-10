<?php

namespace app\controllers;

class Profile extends \app\core\Controller {

    public function viewAll(){
        $profileModel = new \app\models\Profile();
        $profile = $profileModel->getall();
        
        $data = ['profiles' => $profile];
        $this->view('Admin/User/view', $data, true);
        
    }

    public function search()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['query'])) {
            $query = $_GET['query'];

            $profileModel = new \app\models\Profile();
            $profiles = $profileModel->searchProfiles($query);

            $data = ['profiles' => $profiles];
            $this->view('Admin/User/view', $data, true);
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
            header('Location: /Admin/User/view');
            return;
        }

        // Update the active status to 0 (inactive)
        $success = $profileModel->updateActiveStatus($id, 0);

        if ($success) {
            header('Location: /Admin/User/view');
        } else {
            header('Location: /Admin/User/view');
        }
    }

    //create a profile, insertion to the database
    public function create() {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $profile = new \app\models\Profile();

            //populate
            $profile->user_id = $_SESSION['user_id']; //get from the session
            $profile->first_name = $_POST['first_name'];
            $profile->middle_name = $_POST['middle_name'];
            $profile->last_name = $_POST['last_name'];
            
            //insert to DB
            $profile->insert();

            //redirect
            header('location:/Profile/index');

        }
        else {
            $this->view('Profile/create', null, true);
        }
    }

    public function infoDetails($id)
    {
        // Get profile details
        $profileModel = new \app\models\Profile();
        $profile = $profileModel->getProfileByIdDetails($id);
    
        // Check if profile exists
        if (!$profile) {
            header('Location: /Admin/User/view');
            return;
        }
    
        // Get membership details
        $membership = $profileModel->getMembershipByUserId($profile->user_id);
    
        // Get booking details
        $bookings = $profileModel->getBookingsByUserId($profile->user_id);
    
        // Get camp details
        $camps = $profileModel->getCampsByUserId($profile->user_id);
    
        // Pass data to the view
        $data = [
            'profile' => $profile,
            'membership' => $membership,
            'bookings' => $bookings,
            'camps' => $camps
        ];
    
        $this->view('Admin/User/infoDetails', $data, true);
    }
    


}
