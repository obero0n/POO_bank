<?php
/**
 *
 */
class exempleController
{

<<<<<<< HEAD
  public function welcome() {
      $message = "Bonjour voici un boilerplate PHP intégrant un système de routing";
      $account = new BankAccountsManager();
      $list = $account->getList();
      $compte = new BankAccount($_POST);
      $account->add($compte);
=======
  public function welcomeAdmin()
  {
    $account = new BankAccountsManager();
    $list = $account->getList();
    $compte = new BankAccount($_POST);
    $account->add($compte);
>>>>>>> 678f47062c068b588625bc9f18f0326923f790bd

      require "view/exempleView.php";
    }

    public function deleteAccount(){

          $em = new BankAccountsManager();
          $em->delete($_GET["id"]);
          redirectTo("");

  }

<<<<<<< HEAD
=======
  public function welcome()
  {
    require "view/loginUserView.php";
  }

  public function registerUser()
  {
    require "view/registerUserView.php";
  }
>>>>>>> 678f47062c068b588625bc9f18f0326923f790bd
}

 ?>
