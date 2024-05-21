<?php
namespace app\filters\User;

#[\Attribute]
class HasMembership implements \app\core\AccessFilter{

	public function redirected(){
		$membership = new \app\models\Membership();
		$membership = $membership->getMembershipByUserId($_SESSION['user_id']);

		if(isset($membership)){
           		 // redirect to the home page if the user already has a membership
            		header('location:/Home');
			return false; // redirected
		}else{
			// proceed with the membership creation process
			return true; // not redirected
		}
	}

}
