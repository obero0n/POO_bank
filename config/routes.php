<?php

//Function qui retourne un tableau contenant les routes de notre application

//Modèle des routes
//"NomDeLaRoute" => [
//  "Controller",
//  "Fonction",
//  Optionnel [
//    "parametre1" => ["typeAttendu", optionnel[valeurAttendu]],
//    "parametre2" => ["typeAttendu", optionnel[valeurAttendu]]
//  ]
// "status" => "role"
//]
function getRoutes() {
  return [
    "" => [
      "user",
      "welcomeUser",
    ],
    "transfert" => [
      "bankAccount",
      "transfert",
      ["id" => ["int"]]
    ],
    "addAccount" => [
      "bankAccount",
      "addNewAccount",
    ],
    "listAccount" => [
      "bankAccount",
      "listAccount",
      ["id" => ["int"]]
    ],
    "versement" => [
      "transaction",
      "payments",
      ["id" => ["int"]]
    ],
    "retrait" => [
      "transaction",
      "withdrawals",
      ["id" => ["int"]]
    ],
    "single" => [
      "bankAccount",
      "singleBankAccount",
      ["id" => ["int"]],
    ],
    "deleteAccount" => [
      "exemple",
      "deleteAccount",
      ["id" => ["int"]]
    ],
  ];
}

 ?>
