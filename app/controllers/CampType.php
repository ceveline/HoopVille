<?php

namespace app\controllers;


class CampType extends \app\core\Controller
{
  function list()
  {
    $camp = new \app\models\CampType();
    $campTypes = $camp->getAll();


    $this->view('User/camp/list', $campTypes, true);

  }

}