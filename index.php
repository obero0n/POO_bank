<?php
require "config/global.php";
require "service/autoloader.php";
require "service/router.php";
require "service/urlManager.php";
require "service/sessionManager.php";
require "service/formChecker.php";
require "model/manager.php";
require "model/BankAccountsManager.php";
require "model/entity/entity.php";
require "model/entity/BankAccount.php";

autoloader::autoload();
route();
?>
