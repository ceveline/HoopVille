<?php
namespace app\filters;

#[\Attribute]
class Logout implements \app\core\AccessFilter{

	public function redirected(){
		if(isset($_SESSION['user_id'])){
			header('location:/Home'); //change to profile
			return true;
		}
        else if (isset($_SESSION['admin_id'])){
            header('location:/Home'); //change to admin dashboard
			return true;
        }
		return false;
	}

}