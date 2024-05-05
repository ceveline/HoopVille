<?php
$this->addRoute('Home', 'User,home');

//defined a few routes "url"=>"controller,method" -> connected to the App.php file in the core folder
$this->addRoute('login', 'User,login');
$this->addRoute('register', 'User,register');
$this->addRoute('logout', 'User,logout');

//PUBLICATIONS
$this->addRoute('Admin/Publication/create', 'Publication,create');
$this->addRoute('Admin/Publication/index', 'Publication,index'); //list publications
$this->addRoute('Publication/view/{id}', 'Publication,viewPublication'); //list publications
$this->addRoute('Publication/delete/{id}', 'Publication,delete'); 
$this->addRoute('Publication/edit/{id}', 'Publication,edit'); 
$this->addRoute('Publication', 'Publication,list'); //for user not admin
$this->addRoute('Publication/search','Publication,search');

//ADMIN
// $this->addRoute('Admin/login', 'Administrator,login'); -> can use /User/login to login as an admin
$this->addRoute('Admin/register', 'Administrator,register'); 
// -> to create an Admin but we only need one admin so dont need the view
$this->addRoute('Admin/logout', 'Administrator,logout');

// BOOKINGS
$this->addRoute('User/booking/create', 'Booking,create');
$this->addRoute('User/booking/disabledDates', 'Booking,getDisabledDates');
$this->addRoute('User/booking/getTimeSlotsByDate', 'Booking,getTimeSlotsByDate');

//MEMBERSHIP
$this->addRoute('Membership', 'Membership,list');
$this->addRoute('User/membership', 'Membership,list_user');
$this->addRoute('User/membership/create', 'Membership,create');

