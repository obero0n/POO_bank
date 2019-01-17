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
    public function payment($amount)
    {
        $this->money += $amount;
    }

    //Retrait
    public function withdrawal($amount)
    {
        $this->money -= $amount;
    }

    //Virement
    public function transfer($amount, $getter, $sender)
    {
        if(isset($transfer))
        {

        }
    }
    public function viewMoney() {
      if ($this->getMoney() >= 0) {
        echo '<td>' . $this->getMoney() . '</td>';
      }
      else {
        echo '<td class="warningMoney">' . $this->getMoney() . ' <i class="fas fa-exclamation-triangle"></i> </td>';
      }
    }
}
?>
