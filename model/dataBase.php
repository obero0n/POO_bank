<?php
/**
 * Class to connect to the data base
 */
class dataBase {
  const host  = "";
  const dbName = "";
  const login = "";
  const mdp = "";
  static public function BD() {
    $db = new PDO("mysql:host=" . self::host .";POO_bank=" . self::dbName , self::login, self::mdp);
    return $db;
  }
}
