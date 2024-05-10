<?php
$this->addRoute('Home', 'User,home');
$this->addRoute('User/payment', 'User,payment');
$this->addRoute('User/myAccount', 'User,myAccount');
$this->addRoute('User/services', 'User,services');
$this->addRoute('FAQ', 'User,faq');

//defined a few routes "url"=>"controller,method" -> connected to the App.php file in the core folder
$this->addRoute('login', 'User,login');
$this->addRoute('register', 'User,register');
$this->addRoute('logout', 'User,logout');

$this->addRoute('Admin/User/view', 'Profile,viewAll');
$this->addRoute('Admin/Review/list', 'Review,index');
$this->addRoute('Review/delete/{id}', 'Review,delete');

$this->addRoute('User/contact/{email}', 'User,contact');
$this->addRoute('Profile/search', 'Profile,search');
$this->addRoute('Profile/delete/{id}', 'Profile,delete');
$this->addRoute('Profile/infoDetails/{id}', 'Profile,infoDetails');

$this->addRoute('User/forgotPassword', 'User,forgotPassword');
$this->addRoute('User/sendPasswordReset', 'User,sendPasswordReset');
$this->addRoute('User/aboutUs', 'User,aboutUs');
$this->addRoute('User/contactChoice', 'User,contactChoice');

//PUBLICATIONS
$this->addRoute('Admin/Publication/create', 'Publication,create');
$this->addRoute('Admin/Publication/index', 'Publication,index'); //list publications
$this->addRoute('Publication/view/{id}', 'Publication,viewPublication'); //list publications
$this->addRoute('Publication/delete/{id}', 'Publication,delete'); 
$this->addRoute('Publication/edit/{id}', 'Publication,edit'); 
$this->addRoute('Publication', 'Publication,list'); //for user not admin
$this->addRoute('Publication/search','Publication,search');

//ADMINS
// $this->addRoute('Admin/login', 'Administrator,login'); -> can use /User/login to login as an admin
// $this->addRoute('Admin/register', 'Administrator,register'); 
// -> to create an Admin but we only need one admin so dont need the view
// $this->addRoute('Admin/logout', 'Administrator,logout');


// BOOKINGS
$this->addRoute('User/booking/create', 'Booking,create');
$this->addRoute('User/booking/disabledDates', 'Booking,getDisabledDates');
$this->addRoute('User/booking/getTimeSlotsByDate', 'Booking,getTimeSlotsByDate');

//MEMBERSHIP
$this->addRoute('Membership', 'Membership,list');
$this->addRoute('User/membership', 'Membership,list_user');
$this->addRoute('User/membership/create', 'Membership,create');
$this->addRoute('User/membership/edit', 'Membership,edit');
$this->addRoute('User/membership/delete', 'Membership,delete');
$this->addRoute('Admin/membership/list', 'Membership,list_admin');
$this->addRoute('Admin/membership/delete/{membership_id}', 'Membership,deleteById');
$this->addRoute('Admin/membership/edit/{membership_id}', 'Membership,editById');


//REVIEWS
$this->addRoute('User/review/create', 'Review,create');
$this->addRoute('User/review/edit', 'Review,edit');
$this->addRoute('User/review/list', 'Review,list');

//CAMPS
$this->addRoute('User/camp/list', 'CampType,list');
$this->addRoute('User/camp/buy', 'Camp,buy');

//PROFILE
$this->addRoute('User/Profile/create', 'Profile,create');
$this->addRoute('User/profile/edit','Profile,edit');
