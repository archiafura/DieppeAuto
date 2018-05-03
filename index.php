<?php
date_default_timezone_set('Europe/Paris');

require_once "./function/classAutoLoader.php";
spl_autoload_register('classAutoLoader');


$voiture = new Berline("Mini", "Cooper");
var_dump($voiture);
