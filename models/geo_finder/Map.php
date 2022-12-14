<?php

include_once 'Game.php';
include_once 'GuessingScreen.php';

class Map
{

    private int $id;

    private string $name;

    private string $image;

    /**
     * @var Game[] $games
     */
    private array $games = [];

    /**
     * @var GuessingScreen[] $guessingScreens
     */
    private array $guessingScreens = [];

    public function getId(): int {
        return $this->id;
    }

    public function setId(int $id): void {
        $this->id = $id;
    }

    public function getGames(): array {
        return $this->games;
    }

    public function addGame(Game $game): void {
        $this->games[] = $game;
    }

    public function getGuessingScreens(): array {
        return $this->guessingScreens;
    }

    public function addGuessingScreen(GuessingScreen $guessingScreen): void {
        $this->guessingScreens[] = $guessingScreen;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * @param string $image
     */
    public function setImage(string $image): void
    {
        $this->image = $image;
    }

}