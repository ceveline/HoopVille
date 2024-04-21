<?php
namespace app\core;

class Controller{
	function view($name, $data=null, $navbar=false){
		//load the view files to present them to the Web user
		if(is_array($data) && !array_is_list($data)){
			extract($data);
		}
		
		if ($navbar == true) {
			include('app/views/navbar.php');
		}
		include('app/views/' . $name . '.php');
	}
}