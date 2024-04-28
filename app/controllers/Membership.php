<?php

namespace app\controllers;


class Membership extends \app\core\Controller
{

  // only for admin
    function list() {
        $membership_types = new \app\models\Membership_type();
        $membership_types = $membership_types->getAll();

        $this->view('User/Membership/list', ['memberships' => $membership_types], true);
    }

}