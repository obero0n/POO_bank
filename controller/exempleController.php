<?php
/**
 *
 */
class exempleController
{

  public function welcome() {
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
      exit;
    }
}


 ?>
