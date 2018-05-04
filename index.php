<?php

/*namespace loulou;

function date(){
    echo"Coucou";

}

date();

*/
date_default_timezone_set('Europe/Paris');

require_once "./function/classAutoLoader.php";
spl_autoload_register('classAutoLoader');


$nullos = new VoitureSansPermis();




