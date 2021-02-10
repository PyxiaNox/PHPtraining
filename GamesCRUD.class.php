<?php
require_once "Model.class.php";
require_once "Games.class.php";

class GamesCRUD extends Model
{
    private $games;

    public function addGame($game)
    {
        $this->games[] = $game;
    }

    public function getGames()
    {
        return $this->games;
    }

    public function loadingGames()
    {
        $request = $this->getDb()->prepare("SELECT * FROM games");
        $request->execute();

        $myGames = $request->fetchAll(PDO::FETCH_ASSOC);

        $request->closeCursor();

        foreach($myGames as $game)
        {
            $g = new Games($game['id'], $game['title'], $game['illustration'], $game['type'], $game['year'], $game['platform']);
            $this->addGame($g);
        }
    }
}