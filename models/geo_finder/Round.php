<?php

include_once 'models/geo_finder/Game.php';

class Round
{

    /**
     * @var Game $game un attribut de type "Game" => la classe que l'on a créé !
     * On a un attribut du type "Game" seulement car dans notre UML on lit :
     * "Un round A UNE GAME"
     */
    private Game $game;

    private int $points;

    public function getGame(): Game
    {
        return $this->game;
    }

    public function setGame(Game $game): void
    {
        $this->game = $game;
    }

    public function getPoints(): int {
        return $this->points;
    }

    public function setPoints(int $points): void {
        $this->points = $points;
    }

}