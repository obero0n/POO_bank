<?php
/**
 *
 */
class exempleController
{

  public function welcomeAdmin()
  {
    $account = new BankAccountsManager();
    $list = $account->getList();
    $compte = new BankAccount($_POST);
    $account->add($compte);

    require "view/exempleView.php";
  }

  public function deleteAccount()
  {
    $em = new BankAccountsManager();
    $em->delete($_GET["id"]);
    redirectTo("");
  }

  public function welcome()
  {
    require "view/loginUserView.php";
  }

  public function registerUser()
  {
    require "view/registerUserView.php";
  }
}

 ?>
