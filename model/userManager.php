<?php
/**
 *
 */
class userManager extends manager
{

  // function __construct()
  // {
  //
  // }

  public function addU(user $user) {
    $query = $this->_db->prepare("INSERT INTO user(name, password) VALUES(:name, :password)");
    // $result = $query->execute([
    //   "name" => $user->getName(),
    //   "password" => $user->getPassword(),
    // ]);
    $query->bindValue(':name', $user->getName());
    $query->bindValue(':password', $user->getPassword());
    $query->execute();
  }
}


?>
