<?php
namespace app\filters\User;

#[\Attribute]
class HasProfile implements \app\core\AccessFilter{

	public function redirected(){
		if(!isset($_SESSION['user_id'])){
			header('location:/login');
			return true;
		}
		return false;
	}

}