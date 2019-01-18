<?php
class BankAccountController
{

    public function payment()
    {
        $value = "versement";
        $id = $_GET["id"];
        if(!empty($_POST))
        {
            $manager = new BankAccountsManager();
            $account1 = $manager->getAccount($id);
            $finalMoney = $account1->getMoney() - $_POST["amount"];
            $account1->payment($_POST["amount"], $finalMoney);
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
            $finalMoney = $account2->getMoney() - $_POST["amount"];
            $account2->withdrawal($_POST["amount"], $finalMoney);
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
        $account = new BankAccountsManager();
        $list = $account->getList();
        $compte = new BankAccount($_POST);
        $account->add($compte);

        require "view/listAccountView.php";
      }


      public function addNewAccount(){
        if (!empty($_POST)) {
          $compte = new BankAccount($_POST);
          $account = new BankAccountsManager();
          $account->add($compte);
          redirectTo("");
        }
          require "view/addAccountView.php";


      }
      public function deleteAccount(){

            $em = new BankAccountsManager();
            $em->delete($_GET["id"]);
            redirectTo("");
    }

    public function transfert()
    {
      // $getter = new BankAccountsManager();
      // $getter->getAccount();
      //

      require "view/transfertView.php";
    }
}
?>
