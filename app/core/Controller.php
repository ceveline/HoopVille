<?php
namespace app\core;

class Controller
{
	function view($name, $data = null, $navbar = false)
	{
		//load the view files to present them to the Web user
		if (is_array($data) && !array_is_list($data)) {
			extract($data);
		}

		if ($navbar == true) {
			include ('app/views/navbar.php');

		}

		include ('app/views/' . $name . '.php');

		// Check if 'admin_id' key exists in the $_SESSION array
        if (isset($_SESSION['admin_id']) && $_SESSION['admin_id'] == null) {
            include ('app/views/footer.php');
        }

        // Check if 'temp_admin_id' key exists in the $_SESSION array
        if (isset($_SESSION['temp_admin_id']) && $_SESSION['temp_admin_id'] == null) {
            include ('app/views/footer.php');
        }

	}
}