<?php

include_once 'Map.php';

class GuessingScreen
{

    private int $id;

    private float $longitude = 0.0;

    private float $latitude = 0.0;

    /**
     * @var Map[] $maps
     */
    private array $maps = [];

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
     * @return float
     */
    public function getLongitude(): float
    {
        return $this->longitude;
    }

    /**
     * @param float $longitude
     */
    public function setLongitude(float $longitude): void
    {
        $this->longitude = $longitude;
    }

    /**
     * @return float
     */
    public function getLatitude(): float
    {
        return $this->latitude;
    }

    /**
     * @param float $latitude
     */
    public function setLatitude(float $latitude): void
    {
        $this->latitude = $latitude;
    }

    public function getMaps(): array {
        return $this->maps;
    }

    public function addMap(Map $map): void {
        $this->maps[] = $map;
    }

}