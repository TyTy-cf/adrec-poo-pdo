<?php

class Game
{

    /**
     * @var Round[] $rounds
     * On a un attribut de type "array"  car dans notre UML on lit :
     * "Une game A AUCUN OU PLUSIEURS ROUND"
     */
    private array $rounds = [];

    public function getRounds(): array {
        return $this->rounds;
    }

    public function addRound(Round $round): void {
        $this->rounds[] = $round;
    }

    public function getTotalTime(): int {
        return 0;
    }

}