<?php
//defined a few routes "url"=>"controller,method" -> connected to the App.php file in the core folder
$this->addRoute('User/login', 'User,login');
$this->addRoute('User/register', 'User,register');
$this->addRoute('User/logout', 'User,logout');

//PUBLICATIONS
$this->addRoute('Publication/create', 'Publication,create');

//ADMINS
// $this->addRoute('Admin/login', 'Administrator,login'); -> can use /User/login to login as an admin
// $this->addRoute('Admin/register', 'Administrator,register'); -> to create an Admin but we only need one admin so dont need the view
$this->addRoute('Admin/logout', 'Administrator,logout');


// BOOKINGS
$this->addRoute('User/booking/create', 'Booking,create');
$this->addRoute('User/booking/disabledDates', 'Booking,getDisabledDates');
$this->addRoute('User/booking/getTimeSlotsByDate', 'Booking,getTimeSlotsByDate');


//REVIEWS
$this->addRoute('User/review/create', 'Review,create');
$this->addRoute('User/review/edit', 'Review,edit');
$this->addRoute('User/review/list', 'Review,list');


//CAMPS
$this->addRoute('User/camp/list', 'Camp,list');
$this->addRoute('User/camp/create', 'Camp,create');
