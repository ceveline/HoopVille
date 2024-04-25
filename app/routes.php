<?php
//defined a few routes "url"=>"controller,method" -> connected to the App.php file in the core folder
$this->addRoute('User/login', 'User,login');






// BOOKINGS
$this->addRoute('User/booking/create', 'Booking,create');
$this->addRoute('User/booking/disabledDates', 'Booking,getDisabledDates');
$this->addRoute('User/booking/getTimeSlotsByDate', 'Booking,getTimeSlotsByDate');

$this->addRoute('Admin/booking/list', 'Booking,listAdmin');
$this->addRoute('Admin/booking/delete', 'Booking,delete');
$this->addRoute('Admin/booking/filterByStatus', 'Booking,filterByStatus');
$this->addRoute('Admin/booking/bookingsList', 'Booking,bookingsList');
$this->addRoute('Admin/booking/searchBookings', 'Booking,searchBookings');
