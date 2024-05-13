<?php
namespace app\filters;

#[\Attribute]
class Login implements \app\core\AccessFilter
{

	public function redirected()
	{
		// //make sure that the user is logged in
		// if(!isset($_SESSION['user_id'])){
		// 	header('location:/login');
		// 	return true;
		// }
		// return false;
		//make sure that the user is logged in
		if (!isset($_SESSION['user_id']) && !isset($_SESSION['admin_id'])) {
			header('location:/login');
			return true;
		}
		if (isset($_SESSION['secret']) && $_SESSION['secret'] != NULL) {
			header('location:/User/2FA/check2fa');
			return true;
		}
		return false;//not denied
	}

}