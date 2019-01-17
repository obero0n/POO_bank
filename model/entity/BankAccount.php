<?php
class BankAccount extends entity
{
    protected $name;
    protected $money;

    const MINSUM = 50;

    public function setName(string $name)
    {
        $this->name = $name;
    }
    
    public function getName() 
    {
        return $this->name;
    }

    public function setMoney(int $money)
    {
        $this->money = $money;
    }
    
    public function getMoney() 
    {
        return $this->money;
    }

    public function __construct(array $data)
    {
        $this->hydrate($data);
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
