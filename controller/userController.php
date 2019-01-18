<?php
/**
 *
 */
class userController
{

  public function addUserForm()
  {
    $usermanager = new userManager();

    if (!empty($_POST)) {

      $user = new user($_POST);
      $usermanager->addU($user);
      redirectTo("");

    }
    else {
      redirectTo("register");
    }
  }
}


?>
