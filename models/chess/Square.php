<?php

class Square
{

    private string $color;

    private int $x;

    private int $y;

    private ?Piece $piece = null;

    /**
     * @param string $color
     * @param int $x
     * @param int $y
     * @param Piece|null $piece
     */
    public function __construct(string $color, int $x, int $y, ?Piece $piece)
    {
        $this->color = $color;
        $this->x = $x;
        $this->y = $y;
        $this->piece = $piece;
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
     * @return int
     */
    public function getX(): int
    {
        return $this->x;
    }

    /**
     * @param int $x
     */
    public function setX(int $x): void
    {
        $this->x = $x;
    }

    /**
     * @return int
     */
    public function getY(): int
    {
        return $this->y;
    }

    /**
     * @param int $y
     */
    public function setY(int $y): void
    {
        $this->y = $y;
    }

    /**
     * @return Piece|null
     */
    public function getPiece(): ?Piece
    {
        return $this->piece;
    }

    /**
     * @param Piece|null $piece
     */
    public function setPiece(?Piece $piece): void
    {
        $this->piece = $piece;
    }

}