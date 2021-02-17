<?php

require_once "controllers/GamesController.controller.php";
$gameController = new GamesController($db, $user, $pass, $host, $port, $options);

if(empty($_GET['page']))
{
    require "views/home.view.php";
} else {
    switch($_GET['page']){
        case "home" : require "views/home.view.php";
        break;
        case "games" : $gameController->readGame();
        break;
    }
}

?>