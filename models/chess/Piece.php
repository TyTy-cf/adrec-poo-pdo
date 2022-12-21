<?php

abstract class Piece
{

    protected string $color;

    protected string $image;

    /**
     * @param string $color
     */
    public function __construct(string $color)
    {
        $this->color = $color;
        // $this::class => renvoie le nom de la classe
        $this->setImage(strtolower($this::class) . '-' . $this->color . '.png');
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
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

    public abstract function move(): void;

    public function toDie(): void {
        echo 'La piece a été monjé';
    }

}