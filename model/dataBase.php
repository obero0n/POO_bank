<?php
/**
 * Class to connect to the data base
 */
class dataBase {
  const host  = "localhost";
  const dbName = "POO_bank";
<<<<<<< HEAD
  const login = "root";
  const mdp = "root";
=======
  const login = "phpmyadmin";
  const mdp = "adepsimplon05";
>>>>>>> 678f47062c068b588625bc9f18f0326923f790bd
  static public function BD() {
    $db = new PDO("mysql:host=" . self::host .";dbname=" . self::dbName , self::login, self::mdp);
    return $db;
  }
}
