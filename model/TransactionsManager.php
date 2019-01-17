<?php 
class TransactionsManager extends manager 
{
    public function add(Transaction $transaction) {
      $q = $this->_db->prepare('INSERT INTO transaction(getter, sender, amount) VALUES(:getter, :sender, :amount)');
      $q->bindValue(':getter', $account->getGetter());
      $q->bindValue(':sender', $account->getSender());
      $q->bindValue(':amount', $account->getAmount(), PDO::PARAM_INT);
      $q->execute();
    }
  } 
?>