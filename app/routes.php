<?php
//defined a few routes "url"=>"controller,method" -> connected to the App.php file in the core folder
$this->addRoute('User/login','User,login');
$this->addRoute('Admin/User/view', 'Profile,viewAll');

$this->addRoute('User/contact', 'Contact,send');
