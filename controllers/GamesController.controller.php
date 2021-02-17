<?php

require_once "models/GamesCRUD.class.php";

class GamesController
{
    private $gamesCRUD;

    public function __construct($db, $user, $pass, $host, $port, $options)
    {
        $this->gamesCRUD = new GamesCRUD;

        $this->gamesCRUD->loadingGames($db, $user, $pass, $host, $port, $options);
    }

    public function readGame()
    {
        $games = $this->gamesCRUD->getGames();
        require "views/games.view.php";
    }
}