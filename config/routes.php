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
      "exemple",
      "welcome",
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
    "versement" => [
      "bankAccount",
      "payments",
      ["id" => ["int"]]
    ],
    "retrait" => [
      "bankAccount",
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
