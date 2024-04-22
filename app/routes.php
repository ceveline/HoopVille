<?php
//defined a few routes "url"=>"controller,method" -> connected to the App.php file in the core folder
$this->addRoute('User/login', 'User,login');
$this->addRoute('User/register', 'User,register');
$this->addRoute('User/logout', 'User,logout');






// BOOKINGS
$this->addRoute('User/booking/create', 'Booking,create');
$this->addRoute('User/booking/disabledDates', 'Booking,getDisabledDates');
$this->addRoute('User/booking/getTimeSlotsByDate', 'Booking,getTimeSlotsByDate');
