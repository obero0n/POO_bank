<?php
/**
 *
 */
class exempleController
{




  public function welcome() {
    // require "model/entity/BankAccountsManager.php";
      $message = "Bonjour voici un boilerplate PHP intégrant un système de routing";

      $account = new BankAccountsManager();
      $account->getList();
        var_dump($account);
      require "view/exempleView.php";
    }

}


 ?>
