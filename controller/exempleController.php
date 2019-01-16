<?php
/**
 *
 */
class exempleController
{




  public function welcome() {
      $message = "Bonjour voici un boilerplate PHP intégrant un système de routing";

      $account = new BankAccountsManager();

      $list = $account->getList();
        $compte = new BankAccount($_POST);
      $account->add($compte);



      require "view/exempleView.php";
    }
    public function deleteAccount(){
      $id = $_GET['id'];
      $deletAccount = new BankAccountsManager();
      $erase = $deletAccount->delete($id);

      header("Location:view/exempleView.php");
    }
}


 ?>
