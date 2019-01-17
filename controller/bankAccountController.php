<?php
class BankAccountController
{
    public function payments()
    {
        $value = "versement";
        $id = $_GET["id"];
        if(!empty($_POST)) 
        {
            $accountManager = new BankAccountsManager();
            $account1 = $accountManager->getAccount($id);  
            $finalMoney = $account1->getMoney() + $_POST["amount"];
            $transactionManager = new TransactionManager();
            $account1->payment($_POST["amount"], $finalMoney);
            $manager->update($account1);
            $transactionManager->add($account1);
            redirectTo(""); 
        }
        require "view/paymentWithdrawalView.php";
    }

    public function withdrawals()
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
        $id = $_GET["id"];
        $manager = new bankAccountsManager;
        $singleAccount = $manager->getAccount($id);
        require "view/singleBankAccountView.php";
    }
}
?>
