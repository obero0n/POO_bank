<?php
class BankAccountController
{
    public function payments()
    {
        $value = "versement";
        $id = $_GET["id"];

        $accountManager = new BankAccountsManager;
        $bankAccount = $accountManager->getAccount($id);  
        $transaction = new Transaction([]);
        $transaction->payment($bankAccount, $accountManager);
        
        require "view/paymentWithdrawalView.php";
    }

    public function withdrawals()
    {
        $value = "retrait";
        $id = $_GET["id"];
        if(!empty($_POST))
        {
            $manager = new BankAccountsManager;
            $account = $manager->getAccount($id);   
            $finalMoney = $account->getMoney() - $_POST["amount"]; 
            $account->withdrawal($_POST["amount"], $finalMoney);
            $manager->update($account);  
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
