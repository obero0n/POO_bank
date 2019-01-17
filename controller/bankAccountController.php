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
}
?>