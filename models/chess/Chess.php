<?php

include_once 'Square.php';
include_once 'Pawn.php';
include_once 'Rook.php';

class Chess
{

    /**
     * @var Square[] $board
     */
    private array $board = [];

    public function __construct()
    {
        for ($y = 8; $y >= 1; $y--) {
            for ($x = 1; $x <= 8; $x++) {
                $colorPiece = 'black';
                $piece = null;
                if ($y === 2 || $y === 1) {
                    $colorPiece = 'white';
                }
                if ($y === 2 || $y === 7) {
                    $piece = new Pawn($colorPiece);
                }
                if ($y === 1 || $y === 8) {
                    if ($x === 1 || $x === 8) {
                        $piece = new Rook($colorPiece);
                    }
                }
                $square = new Square('', $x, $y, $piece);
                $this->board[] = $square;
            }
        }

//        var_dump($this->board);

        foreach ($this->board as $square) {
            /**
             * @var Square $square
             */
            if ($square->getPiece() !== null) {
                $square->getPiece()->move();
            } else {
                echo 'Pas de pièce, pas de move !';
                echo '<br>';
            }
        }
    }

}