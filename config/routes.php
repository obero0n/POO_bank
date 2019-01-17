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
    "login" => [
      "admin",
      "loginUser",
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
      "bankAccount",
      "payment",
      ["id" => ["int"]]
    ],
    "retrait" => [
      "bankAccount",
      "withdrawal",
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
