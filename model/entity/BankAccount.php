<?php 
class BankAccount extends entity
{
    protected $name;
    protected $money;

    const MINSUM = 50;

    public function setName($name) 
    {
        $this->name = $name;
    }
    
    public function getname() 
    {
        return $this->name;
    }

    public function setMoney($money) 
    {
        $this->money = $money;
    }
    
    public function getmoney() 
    {
        return $this->money;
    }

    public function __construct($data) 
    { 
        $this->hydrate($data);
    }
    //Versement
    public function payment($amount)
    {
        if(isset($payment)) 
        {
            $finalMoney = $money + $amount;
            return $finalMoney;
        }
    }
    //Retrait
    public function withdrawal($amount)
    {
        if(isset($withdrawal)) 
        {
            $finalMoney = $money + $amount;
            return $finalMoney;
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