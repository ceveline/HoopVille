<?php

namespace app\controllers;


class Membership extends \app\core\Controller
{

    // view for membership page
    function list() {
        $membership_types = new \app\models\Membership_type();
        $membership_types = $membership_types->getAll();

        $this->view('User/Membership/list', ['memberships' => $membership_types], true);
    }

    //show client's membership on their profile
    function list_user(){
        $membership_model = new \app\models\Membership();
        $membership_model = $membership_model->getMembershipByUserId($_SESSION['user_id']);
    
        $membership_types_mdl = new \app\models\Membership_type();
        $membership_types = $membership_types_mdl->getAll();

        $membership_type = $membership_types_mdl->getByType($membership_model->membership_type);

        $this->view('User/Membership/individual', ['membership' => $membership_model, 'type' => $membership_type, 'types' => $membership_types], true);
    }

    //list all user memberships
    function list_admin() {
        $membership_model = new \app\models\Membership();
        $membership_model = $membership_model->getAll();

        //get user profile to display email
        $profile_model = new \app\models\Profile();
        $profile_model = $profile_model->getAll();

        $this->view('Admin/Membership/list', ['memberships' => $membership_model, 'profiles' => $profile_model], true);
    }

    function create() {
        date_default_timezone_set('America/New_York'); // Set the timezone

        // Create a new instance of the Membership model
        $membership_model = new \app\models\Membership();

        // Get the user ID from the session
        $user_id = $_SESSION['user_id'];

        // Get the current timestamp
        $current_timestamp = time();

        // Calculate the future timestamp (1 year from now)
        $future_timestamp = strtotime('+1 year', $current_timestamp);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Set the membership details
            $membership_model->membership_type = $_POST['membership_type'];
            $membership_model->user_id = $user_id;
            $membership_model->start_date = date('Y-m-d H:i:s', $current_timestamp);
            $membership_model->end_date = date('Y-m-d H:i:s', $future_timestamp);

            // Insert the membership into the database
            $membership_model->insert();

            // Redirect to the menu page
            header("location:/User/membership");
        } else {
            // If it's not a POST request, display the membership list page
            $this->view('User/Membership/list', null, true);
        }
    }
    
    function edit() {
        $membership_model = new \app\models\Membership();
        $membership_model = $membership_model->getMembershipByUserId($_SESSION['user_id']);
        $membership_id = $membership_model->membership_id;

        // Get the current timestamp
        $current_timestamp = time();

        // Calculate the future timestamp (1 year from now)
        $future_timestamp = strtotime('+1 year', $current_timestamp);
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $membership_model->membership_type = $_POST['membership_type'];
            $membership_model->start_date = date('Y-m-d H:i:s', $current_timestamp);

            $membership_model->update($membership_id);

            header("location:/User/membership");
        } else {
            $this->view('User/Membership', ['membership' => $membership_model], true);
        }
    }

    function delete() {
        $membership_model = new \app\models\Membership();
		$membership = $membership_model->getMembershipByUserId($_SESSION['user_id']);

        $membership_model->delete($membership->membership_id);
        header('location:/Home'); 
    }

    function deleteById($membership_id) {
        $membership_model = new \app\models\Membership();

        $membership_model->deleteById($membership_id);
        header('location:/Admin/membership/list'); 
    }

}