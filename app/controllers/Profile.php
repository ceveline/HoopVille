<?php

namespace app\controllers;

class Profile extends \app\core\Controller
{
    // Admin side: display general info about the user
    public function viewAll()
    {
        $profileModel = new \app\models\Profile();
        $profile = $profileModel->getall();

        $data = ['profiles' => $profile];
        $this->view('Admin/User/view', $data, true);

    }

    // Admin side: search for specific user
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

    // Admin side: delete the user by setting the account's active to 0
    public function delete($id)
    {
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
    #[\app\filters\Login]

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $profile = new \app\models\Profile();

            $profile = new \app\models\profile(); //instance of profile class

            //!!!!!!! change to session id when branches are merged
            $profile->user_id = $_SESSION['user_id'];
            $profile->first_name = $_POST['fname'];
            $profile->last_name = $_POST['lname'];
            $profile->date_of_birth = $_POST['dob'];
            $profile->phone = $_POST['phoneNumber'];



            $profile->insert(); //inserting into db



        } else {
            $this->view('User/profile/create', null, true);

        }

    }

    public function edit()
    {
        $profile = new \app\models\Profile();
        $profile = $profile->getProfileById($_GET['id']);


        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $profile->first_name = $_POST['fname'];
            $profile->last_name = $_POST['lname'];
            $profile->phoneNumber = $_POST['phoneNumber'];

            $profile->update($_GET['id']);

            header('location:/User/myAccount');
        } else {
            $this->view('User/profile/edit', $profile, true);
        }
    }

    // Admin side: display detailed info about the user
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
