<?php

namespace app\controllers;

class Contact extends \app\core\Controller {

    public function send(){
        $this->view('/User/contact');
    
    }

}
