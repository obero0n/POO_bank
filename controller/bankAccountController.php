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
        $manager = new BankAccountsManager();
        $account1 = $manager->getAccount($id);
        $account1->payment($_POST, $account1->getMoney());
        $manager->update($account1);

        var_dump($account1);

        require "view/paymentWithdrawalView.php";
    }

    public function withdrawal()
    {
        $value = "retrait";

        require "view/paymentWithdrawalView.php";
    }

    public function singleBankAccount()
    {
        require "view/singleBankAccountView.php";
    }
}
?>
