<?php
$this->addRoute('Home', 'User,home');

//defined a few routes "url"=>"controller,method" -> connected to the App.php file in the core folder
$this->addRoute('User/login', 'User,login');
$this->addRoute('User/register', 'User,register');
$this->addRoute('User/logout', 'User,logout');

//PUBLICATIONS
$this->addRoute('Admin/Publication/create', 'Publication,create');
$this->addRoute('Admin/Publication/index', 'Publication,index'); //list publications
$this->addRoute('Publication/view/{id}', 'Publication,viewPublication'); //list publications
$this->addRoute('Publication/delete/{id}', 'Publication,delete');
$this->addRoute('Publication/edit/{id}', 'Publication,edit');

//ADMIN
// $this->addRoute('Admin/login', 'Administrator,login'); -> can use /User/login to login as an admin
$this->addRoute('Admin/register', 'Administrator,register');
// -> to create an Admin but we only need one admin so dont need the view
$this->addRoute('Admin/logout', 'Administrator,logout');

// BOOKINGS
$this->addRoute('User/booking/create', 'Booking,create');
$this->addRoute('User/booking/disabledDates', 'Booking,getDisabledDates');
$this->addRoute('User/booking/getTimeSlotsByDate', 'Booking,getTimeSlotsByDate');

$this->addRoute('Admin/booking/list', 'Booking,listAdmin');
$this->addRoute('Admin/booking/edit', 'Booking,edit');
$this->addRoute('Admin/booking/delete', 'Booking,delete');
$this->addRoute('Admin/booking/filterByStatus', 'Booking,filterByStatus');
$this->addRoute('Admin/booking/bookingsList', 'Booking,bookingsList');
$this->addRoute('Admin/booking/searchBookingsByEmail', 'Booking,searchBookingsByEmail');

$this->addRoute('Admin/booking/getBookingTypes', 'Booking_type,getBookingTypes');

$this->addRoute('Admin/booking/updateStatus', 'Booking,updateStatus');
