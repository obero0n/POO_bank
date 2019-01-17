<?php
class BankAccountController
{
    public function singleBankAccount() 
    {
        $id = $_GET["id"];
        $manager = new bankAccountsManager;
        $singleAccount = $manager->getAccount($id);
        require "view/singleBankAccountView.php";
    }
}
?>
