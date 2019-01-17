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
<<<<<<< HEAD
        $manager = new BankAccountsManager();
        $account1 = $manager->getAccount($id);
        $account1->payment($_POST, $account1->getMoney());
        $manager->update($account1);

        var_dump($account1);

=======
        if(!empty($_POST)) 
        {
            $manager = new BankAccountsManager();
            $account1 = $manager->getAccount($id);    
            $account1->payment($_POST["amount"]);
            $manager->update($account1); 
            redirectTo(""); 
        }
>>>>>>> 649b4f85affb27f83e4c1f2131d814d023bcaf4c
        require "view/paymentWithdrawalView.php";
    }

    public function withdrawal()
    {
        $value = "retrait";
<<<<<<< HEAD

=======
        $id = $_GET["id"];
        if(!empty($_POST))
        {
            $manager1 = new BankAccountsManager();
            $account2 = $manager1->getAccount($id);    
            $account2->withdrawal($_POST["amount"]);
            $manager1->update($account2);  
            redirectTo(""); 
        }
>>>>>>> 649b4f85affb27f83e4c1f2131d814d023bcaf4c
        require "view/paymentWithdrawalView.php";
    }

    public function singleBankAccount()
    {
        require "view/singleBankAccountView.php";
    }
}
?>
