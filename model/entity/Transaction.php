<?php 
class Transaction extends BankAccount
{
    protected $getter;
    protected $sender;
    protected $amount;

    public function setGetter(string $getter)
    {
        $this->getter = $getter;
    }

    public function setSender(string $sender)
    {
        $this->sender = $sender;
    }

    public function setAmount(string $Amount)
    {
        $this->Amount = $Amount;
    }

    public function getGetter() 
    {
        return $this->getter;
    }

    public function getSender() 
    {
        return $this->sender;
    }

    public function getAmount() 
    {
        return $this->amount;
    }

    //Versement
    public function payment($amount, $finalMoney)
    {
        if($amount <= 1000 && $finalMoney >= -100)
        {
            $this->money += $amount;    
        }
}

    //Retrait
    public function withdrawal($amount, $finalMoney)
    {
        if($amount <= 1000 && $finalMoney >= -100)
        {
            $this->money -= $amount;    
        }
    }

    //Virement
    public function transfer($amount, $getter, $sender)
    {
        if(isset($transfer))
        {

        }
    }
}
?>