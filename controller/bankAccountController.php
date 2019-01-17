<?php
class BankAccountController
{



  public function list() {

      $account = new BankAccountsManager();
      $list = $account->getList();
      $compte = new BankAccount($_POST);
      $account->add($compte);

      require "view/exempleView.php";
    }

    public function payment()
    {
        $value = "versement";
        $id = $_GET["id"];
        if(!empty($_POST))
        {
            $manager = new BankAccountsManager();
            $account1 = $manager->getAccount($id);
            $account1->payment($_POST["amount"]);
            $manager->update($account1);
            redirectTo("");
        }
        require "view/paymentWithdrawalView.php";
    }

    public function withdrawal()
    {
        $value = "retrait";
        $id = $_GET["id"];
        if(!empty($_POST))
        {
            $manager1 = new BankAccountsManager();
            $account2 = $manager1->getAccount($id);
            $account2->withdrawal($_POST["amount"]);
            $manager1->update($account2);
            redirectTo("");
        }
        require "view/paymentWithdrawalView.php";
    }

    public function singleBankAccount()
    {
        require "view/singleBankAccountView.php";
    }


// page of Account's list (show a table with all account with action to: update / delete / add)
    public function listAccount() {
        $message = "Bonjour voici un boilerplate PHP intégrant un système de routing";
        $account = new BankAccountsManager();
        $list = $account->getList();
        $compte = new BankAccount($_POST);
        $account->add($compte);

        require "view/listAccountView.php";
      }


      public function addAccount(){
        $compte = new BankAccount($_POST);
        $account = new BankAccountsManager();
        $account->add($compte);

        require "view/addAccountView.php";
      }
}
?>
