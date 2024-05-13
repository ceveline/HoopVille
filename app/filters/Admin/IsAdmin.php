<?php
namespace app\filters\Admin;

#[\Attribute]
class IsAdmin implements \app\core\AccessFilter
{

	public function redirected()
	{
		if (!isset($_SESSION['admin_id'])) {
			header('location:/Home'); //change to main page
			return true;
		}
		return false;
	}

}