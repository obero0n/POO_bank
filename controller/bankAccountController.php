<?php 
class BankAccountController
{
    public function payment()
    {
        $value = "versement";
        require "view/paymentWithdrawalView.php";
    }

    public function withdrawal()
    {
        $value = "retrait";
        require "view/paymentWithdrawalView.php";
    }
}
?>