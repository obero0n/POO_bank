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
<<<<<<< HEAD
      "bankAccount",
      "listAccount"
=======
      "exemple",
      "welcome",
>>>>>>> adfabf67f9d3aa3ce4908f52afe6f1a7fc2a1efa
    ],
    "login" => [
      "admin",
      "loginUser",
    ],
    "addAccount" => [
      "bankAccount",
      "addAccount",
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
