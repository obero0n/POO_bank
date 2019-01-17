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
    
    public function getName() 
    {
        return $this->name;
    }

    public function setMoney($money)
    {
        $this->money = $money;
    }
    
    public function getMoney() 
    {
        return $this->money;
    }

    public function __construct($data)
    {
        $this->hydrate($data);
    }
    //Versement
    public function payment($form, $money)
    {
        $finalMoney = $money + $form["amount"];
        return $finalMoney;
    }
    //Retrait
    public function withdrawal($amount)
    {
        
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
