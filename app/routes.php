<?php

// 2FA
$this->addRoute('User/2FA/setup2fa', 'User,setup2fa');
$this->addRoute('User/2FA/check2fa', 'User,check2fa');

// USER
$this->addRoute('', 'User,home');
$this->addRoute('Home', 'User,home');
$this->addRoute('User/payment', 'User,payment');
$this->addRoute('User/myAccount', 'User,myAccount');
$this->addRoute('User/services', 'User,services');
$this->addRoute('FAQ', 'User,faq');

$this->addRoute('User/resetPassword', 'User,resetPassword');
$this->addRoute('User/processResetPassword', 'User,processResetPassword');

//defined a few routes "url"=>"controller,method" -> connected to the App.php file in the core folder
$this->addRoute('login', 'User,login');
$this->addRoute('register', 'User,register');
$this->addRoute('logout', 'User,logout');

$this->addRoute('Admin/dashboard', 'Administrator,dashboard');
$this->addRoute('Admin/User/view', 'Profile,viewAll');
$this->addRoute('Admin/Review/list', 'Review,index');
$this->addRoute('Review/delete/{id}', 'Review,delete');
$this->addRoute('Review/deleteReview/{id}', 'Review,deleteReview');
$this->addRoute('Review/search', 'Review,search');
$this->addRoute('Review/filterByStars', 'Review,filterByStars');
$this->addRoute('Review/reviewDetails/{id}', 'Review,reviewDetails');

$this->addRoute('User/contact/{email}', 'User,contact');
$this->addRoute('Profile/search', 'Profile,search');
$this->addRoute('Profile/delete/{id}', 'Profile,delete');
$this->addRoute('Profile/infoDetails/{id}', 'Profile,infoDetails');

$this->addRoute('User/forgotPassword', 'User,forgotPassword');
$this->addRoute('User/sendPasswordReset', 'User,sendPasswordReset');
$this->addRoute('User/aboutUs', 'User,aboutUs');
$this->addRoute('User/contactChoice', 'User,contactChoice');
$this->addRoute('User/sendMessage', 'User,sendMessage');

//PUBLICATIONS
$this->addRoute('Admin/Publication/create', 'Publication,create');
$this->addRoute('Admin/Publication/index', 'Publication,index'); //list publications
$this->addRoute('Publication/view/{id}', 'Publication,viewPublication'); //list publications
$this->addRoute('Publication/delete/{id}', 'Publication,delete');
$this->addRoute('Publication/edit/{id}', 'Publication,edit');
$this->addRoute('Publication', 'Publication,list'); //for user not admin
$this->addRoute('Publication/search', 'Publication,search');

//ADMINS
// $this->addRoute('Admin/login', 'Administrator,login'); -> can use /User/login to login as an admin
// $this->addRoute('Admin/register', 'Administrator,register'); 
// -> to create an Admin but we only need one admin so dont need the view
// $this->addRoute('Admin/logout', 'Administrator,logout');


// BOOKINGS
$this->addRoute('User/booking/create', 'Booking,create');
$this->addRoute('User/booking/disabledDates', 'Booking,getDisabledDates');
$this->addRoute('User/booking/getTimeSlotsByDate', 'Booking,getTimeSlotsByDate');
$this->addRoute('Booking/edit', 'Booking,edit');
$this->addRoute('Booking/delete', 'Booking,delete');

$this->addRoute('User/booking/create', 'Booking,create');
$this->addRoute('User/booking/disabledDates', 'Booking,getDisabledDates');
$this->addRoute('User/booking/getTimeSlotsByDate', 'Booking,getTimeSlotsByDate');

$this->addRoute('Admin/booking/list', 'Booking,listAdmin');
$this->addRoute('Admin/booking/filterByStatus', 'Booking,filterByStatus');
$this->addRoute('Admin/booking/bookingsList', 'Booking,bookingsList');
$this->addRoute('Admin/booking/searchBookingsByEmail', 'Booking,searchBookingsByEmail');

$this->addRoute('Admin/booking/getBookingTypes', 'Booking_type,getBookingTypes');

$this->addRoute('Admin/booking/updateStatus', 'Booking,updateStatus');

//MEMBERSHIP
$this->addRoute('Membership', 'Membership,list');
$this->addRoute('User/membership', 'Membership,list_user');
$this->addRoute('User/membership/create', 'Membership,create');
$this->addRoute('User/membership/edit', 'Membership,edit');
$this->addRoute('User/membership/delete', 'Membership,delete');
$this->addRoute('Admin/membership/list', 'Membership,list_admin');
$this->addRoute('Admin/membership/delete/{membership_id}', 'Membership,deleteById');
$this->addRoute('Admin/membership/edit/{membership_id}', 'Membership,editById');
$this->addRoute('Membership/cancelMembership/{profile_id}', 'Membership,cancelMembership');
$this->addRoute('Booking/cancelBooking/{profile_id}', 'Booking,cancelBooking');
$this->addRoute('Camp/cancelCamp/{profile_id}', 'Camp,cancelCamp');


//REVIEWS
$this->addRoute('User/review/create', 'Review,create');
$this->addRoute('User/review/edit', 'Review,edit');
$this->addRoute('User/review/list', 'Review,list');
$this->addRoute('User/review/delete', 'Review,delete');


//CAMPS
$this->addRoute('User/camp/list', 'CampType,list');
$this->addRoute('User/camp/buy', 'Camp,buy');

//PROFILE
$this->addRoute('User/Profile/create', 'Profile,create');
$this->addRoute('User/profile/edit', 'Profile,edit');


