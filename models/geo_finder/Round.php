<?php

include_once 'Game.php';

class Round
{

    /**
     * @var Game $game un attribut de type "Game" => la classe que l'on a créé !
     * On a un attribut du type "Game" seulement car dans notre UML on lit :
     * "Un round A UNE GAME"
     */
    private Game $game;

    private int $id;

    private int $points;

    private int $time;

    private float $distance;

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

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getTime(): int
    {
        return $this->time;
    }

    /**
     * @param int $time
     */
    public function setTime(int $time): void
    {
        $this->time = $time;
    }

    /**
     * @return float
     */
    public function getDistance(): float
    {
        return $this->distance;
    }

    /**
     * @param float $distance
     */
    public function setDistance(float $distance): void
    {
        $this->distance = $distance;
    }

}