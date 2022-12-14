<?php

include_once 'Map.php';
include_once 'User.php';
include_once 'Round.php';

class Game
{

    private int $id;

    private int $maximumTime = 0;

    private bool $hasMove = false;

    private bool $hasPan = false;

    private bool $hasZoom = false;

    private Map $map;

    private User $user;

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
    public function getMaximumTime(): int
    {
        return $this->maximumTime;
    }

    /**
     * @param int $maximumTime
     */
    public function setMaximumTime(int $maximumTime): void
    {
        $this->maximumTime = $maximumTime;
    }

    /**
     * @return bool
     */
    public function isHasMove(): bool
    {
        return $this->hasMove;
    }

    /**
     * @param bool $hasMove
     */
    public function setHasMove(bool $hasMove): void
    {
        $this->hasMove = $hasMove;
    }

    /**
     * @return bool
     */
    public function isHasPan(): bool
    {
        return $this->hasPan;
    }

    /**
     * @param bool $hasPan
     */
    public function setHasPan(bool $hasPan): void
    {
        $this->hasPan = $hasPan;
    }

    /**
     * @return bool
     */
    public function isHasZoom(): bool
    {
        return $this->hasZoom;
    }

    /**
     * @param bool $hasZoom
     */
    public function setHasZoom(bool $hasZoom): void
    {
        $this->hasZoom = $hasZoom;
    }

    /**
     * @return Map
     */
    public function getMap(): Map
    {
        return $this->map;
    }

    /**
     * @param Map $map
     */
    public function setMap(Map $map): void
    {
        $this->map = $map;
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @param User $user
     */
    public function setUser(User $user): void
    {
        $this->user = $user;
    }

    public function getTotalTime(): int {
        $totalTime = 0;
        foreach ($this->rounds as $round) {
            /** @var Round $round */
            $totalTime += $round->getTime();
        }
        return $totalTime;
    }

    public function getTotalDistance(): int {
        $total = 0;
        foreach ($this->rounds as $round) {
            /** @var Round $round */
            $total += $round->getDistance();
        }
        return $total;
    }

    public function getTotalPoints(): int {
        $total = 0;
        foreach ($this->rounds as $round) {
            /** @var Round $round */
            $total += $round->getPoints();
        }
        return $total;
    }

}