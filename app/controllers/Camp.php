<?php

namespace app\controllers;


class Camp extends \app\core\Controller {
    function list()
    {
      
      $this->view('User/Camp/list', null, true);
    }
  
}