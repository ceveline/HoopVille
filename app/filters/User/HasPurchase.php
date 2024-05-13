<?php
namespace app\filters\User;

#[\Attribute]
class HasPurchase implements \app\core\AccessFilter{

	public function redirected(){
		$membership = new \app\models\Membership();
		$membership = $membership->getMembershipByUserId($_SESSION['user_id']);

        $booking = new \app\models\Booking();
		$booking = $booking->getBookingsByUserId($_SESSION['user_id']);

        $camp = new \app\models\Camp();
		$camp = $camp->listUserCamps($_SESSION['user_id']);

		if(!$membership && !$booking && !$camp){
            // redirect to the services page if the user does not have any purchase
            header('location:/User/Services');
			return false;
		}else{
			// review creation 
			return true;
		}
	}

}