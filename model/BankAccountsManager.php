<?php
class BankAccountsManager extends manager {

  // private $_db; // Instance de PDO
  //
  // public function __construct($db)
  // {
  //   $this->setDb($db);
  // }




  public function getList()
    {
      $list = [];
      $q = $this->_db->query('SELECT id, name, money FROM bankAccount');
      while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
      {
        $list[] = new BankAccount($donnees);
      }
      return $list;
    }

///////////////////////////////////////////////////////////////////////

  public function add(BankAccount $account) {
    $q = $this->_db->prepare('INSERT INTO bankAccount(name, money) VALUES(:name, :money)');

  $q->bindValue(':name', $account->getname());
  $q->bindValue(':money', $account->getmoney(), PDO::PARAM_INT);

  $q->execute();
  }
}

///////////////////////////////////////////////////////////////////////

// public function delete(BankAccount $account)
// {
//   $this->_db->exec('DELETE FROM bankAccount WHERE id = '.$account->id());
// }

 ?>
