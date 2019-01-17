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
      "bankAccount",
      "listAccount"
    ],
    "register" => [
      "exemple",
      "registerUser",
    ],
    "admin" => [
      "exemple",
      "welcomeAdmin",
    ],
    "login" => [
      "admin",
      "loginAdmin",
    ],
    "addAccount" => [
      "bankAccount",
      "addNewAccount",
    ],
    "updateAccount" => [
      "bankAccount",
      "updateAccount",
    ],
    "listAccount" => [
      "bankAccount",
      "list",
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
    ]
  ];
}

 ?>
