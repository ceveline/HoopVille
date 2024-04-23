<?php

namespace app\controllers;

class Profile extends \app\core\Controller {

    public function viewAll(){
        $profileModel = new \app\models\Profile();
        $profile = $profileModel->getall();
        
        $data = ['profiles' => $profile];
        $this->view('Admin/User/view', $data);
        
    }

}
