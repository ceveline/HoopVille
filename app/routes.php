<?php
//defined a few routes "url"=>"controller,method" -> connected to the App.php file in the core folder
$this->addRoute('User/login', 'User,login');






// BOOKINGS
$this->addRoute('User/booking/create', 'Booking,create');
$this->addRoute('User/booking/disabledDates', 'Booking,getDisabledDates');
$this->addRoute('User/booking/getTimeSlotsByDate', 'Booking,getTimeSlotsByDate');


//REVIEWS
$this->addRoute('User/review/create', 'Review,create');

//CAMPS
$this->addRoute('User/camp/list', 'Camp,list');
$this->addRoute('User/camp/create', 'Camp,create');
