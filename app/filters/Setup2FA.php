<?php
namespace app\filters;

#[\Attribute]
class Setup2FA implements \app\core\AccessFilter
{

  public function redirected()
  {

    if (!isset($_SESSION['temp_user_id']) && !isset($_SESSION['temp_admin_id'])) {
      header('location:/login');
      return true;
    }
    if ($_SESSION['secret'] != NULL) {
      header('location:/User/2FA/check2fa');
      return true;
    }
    return false;//not denied
  }

}