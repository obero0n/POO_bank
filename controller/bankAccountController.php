<?php 
class BankAccountController
{
    public function payment()
    {
        $value = "versement";
        $id = $_GET["id"];
        $data = ["3", "test", "60"];
        $account1 = new BankAccount($data);
        $money = $account1->getMoney();
        $name = $account1->getName();
        $account1->payment($_POST, $name, $money, $_POST["amount"]);
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