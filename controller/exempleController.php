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

      require "view/exempleView.php";
    }

    public function deleteAccount(){

          $em = new BankAccountsManager();
          $em->delete($_GET["id"]);
          redirectTo("");

=======
  public function welcome() 
  {
    $account = new BankAccountsManager();
    $list = $account->getList();
    $compte = new BankAccount($_POST);
    $account->add($compte);

    require "view/exempleView.php";
>>>>>>> 649b4f85affb27f83e4c1f2131d814d023bcaf4c
  }

  public function deleteAccount()
  {
    $em = new BankAccountsManager();
    $em->delete($_GET["id"]);
    redirectTo("");
  }
}

 ?>
