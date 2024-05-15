<?php

namespace app\controllers;


class Membership extends \app\core\Controller
{

    // view for membership page
   // #[\app\filters\Login]
    function list()
    {
        $membership_types = new \app\models\Membership_type();
        $membership_types = $membership_types->getAll();

        $this->view('User/Membership/list', ['memberships' => $membership_types], true);
    }

    //show client's membership on their profile
    #[\app\filters\Login]
    function list_user()
    {
        $membership_model = new \app\models\Membership();
        $membership_model = $membership_model->getMembershipByUserId($_SESSION['user_id']);

        $membership_types_mdl = new \app\models\Membership_type();
        $membership_type = $membership_types_mdl->getByType($membership_model->membership_type);
        $membership_types = $membership_types_mdl->getAll();
        
        if ($membership_model) {
            $this->view('User/Membership/individual', ['membership' => $membership_model, 'type' => $membership_type, 'types' => $membership_types], true);
        } else {
            var_dump('no data');
            $this->view('User/Membership/individual', null, true);
        }
    }

        

    // function list_user()
    // {
    //     $membership_model = new \app\models\Membership();
    //     $membership_model = $membership_model->getMembershipByUserId($_SESSION['user_id']);

    //     if ($membership_model != null) {
            
    //         $membership_types_mdl = new \app\models\Membership_type();
    //         $membership_type = $membership_types_mdl->getByType($membership_model->membership_type);
    //         $membership_types = $membership_types_mdl->getAll();
    //         $this->view('User/Membership/individual', ['membership' => $membership_model, 'type' => $membership_type, 'types' => $membership_types], true);
    //     }
    //     else {
    //         $this->view('User/Membership/individual', null, true);
    //     }

    //     $this->view('User/Membership/individual', null, true);


    // }

    //list all user memberships
    #[\app\filters\Admin\IsAdmin]
    function list_admin()
    {
        $membership_model = new \app\models\Membership();
        $membership_model = $membership_model->getAll();

        //get user profile to display email
        $profile_model = new \app\models\Profile();
        $profile_model = $profile_model->getAll();

        $this->view('Admin/Membership/list', ['memberships' => $membership_model, 'profiles' => $profile_model], true);
    }


    //user has to register first before creating a membership
    #[\app\filters\User\HasMembership]
    function create()
    {
        date_default_timezone_set('America/New_York'); // Set the timezone

        // Create a new instance of the Membership model
        $membership_model = new \app\models\Membership();

        // Get the user ID from the session
        $user_id = $_SESSION['user_id'];

        // Get the current timestamp
        $current_timestamp = time();

        // Calculate the future timestamp (1 year from now)
        $future_timestamp = strtotime('+1 year', $current_timestamp);

        // Check if the user already has a membership
        $existing_membership = $membership_model->getMembershipByUserId($user_id);

        if ($existing_membership) {
            // If the user already has a membership, redirect to the home page
            header("location:/User/myAccount");
            return;
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Set the membership details
            $membership_model->membership_type = $_POST['membership_type'];
            $membership_model->user_id = $user_id;
            $membership_model->start_date = date('Y-m-d H:i:s', $current_timestamp);
            $membership_model->end_date = date('Y-m-d H:i:s', $future_timestamp);

            // Insert the membership into the database
            $membership_model->insert();

            // Redirect to the menu page
            header("location:/User/myAccount");
        } else {
            // If it's not a POST request, display the membership list page
            $this->view('User/Membership/list', null, true);
        }
    }

    #[\app\filters\Login]
    function edit()
    {

        date_default_timezone_set('America/New_York'); // Set the timezone

        $membership_model = new \app\models\Membership();
        $membership_model = $membership_model->getMembershipByUserId($_SESSION['user_id']);
        $membership_id = $membership_model->membership_id;

        if (!$membership_model) {
            return;
        }

        // Get the current timestamp
        $current_timestamp = time();

        // Calculate the future timestamp (1 year from now)
        $future_timestamp = strtotime('+1 year', $current_timestamp);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $membership_model->membership_type = $_POST['membership_type'];
            $membership_model->start_date = date('Y-m-d H:i:s', $current_timestamp);

            $membership_model->update($membership_id);

            header("location:/User/myAccount");
        } else {
            $this->view('User/Membership', ['membership' => $membership_model], true);
        }
    }

    //for admin
    #[\app\filters\Admin\IsAdmin]
    function editById($membership_id)
    {
        date_default_timezone_set('America/New_York'); // Set the timezone

        $membership_model = new \app\models\Membership();
        $membership_model = $membership_model->getMembershipById($membership_id);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $membership_model->membership_type = $_POST['membership_type'];

            $membership_model->updateAdmin($membership_id);

            header("location:/Admin/membership/list");
        } else {
            $this->view('Admin/Membership/edit', ['membership' => $membership_model], true);
        }
    }

    #[\app\filters\Login]
    function delete()
    {
        $membership_model = new \app\models\Membership();
        $membership = $membership_model->getMembershipByUserId($_SESSION['user_id']);

        $membership_model->deleteById($membership->membership_id);
        header('location:/User/myAccount');
    }

    #[\app\filters\Admin\IsAdmin]
    function deleteById($membership_id)
    {
        $membership_model = new \app\models\Membership();

        $membership_model->deleteById($membership_id);
        header('location:/Admin/membership/list');
    }

        // Admin side: it will delete the membership related to the user
        public function cancelMembership($profile_id)
        {
            // Check if the request method is POST
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Get the membership ID from the POST data
                $membership_id = $_POST['membership_id'];
                $membership_model = new \app\models\Membership();
                $membership_model->deleteById($membership_id);
    
                header("Location: /Profile/infoDetails/{$profile_id}");
            }
        }
    


}