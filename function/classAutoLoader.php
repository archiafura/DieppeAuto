<?php


function classAutoLoader($className) {

    require_once "./classe/" . $className . ".php";
}