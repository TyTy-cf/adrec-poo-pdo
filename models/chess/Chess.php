<?php

include_once 'Square.php';
include_once 'Pawn.php';
include_once 'Rook.php';
include_once 'Knight.php';
include_once 'Bishop.php';
include_once 'Queen.php';
include_once 'King.php';
include_once 'Piece.php';

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
                $piece = null;
                $colorPiece = 'black';
                $colorSquare = 'white';
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
                    if ($x === 2 || $x === 7) {
                        $piece = new Knight($colorPiece);
                    }
                    if ($x === 3 || $x === 6) {
                        $piece = new Bishop($colorPiece);
                    }
                    if ($x === 4) {
                        $piece = new Queen($colorPiece);
                    }
                    if ($x === 5) {
                        $piece = new King($colorPiece);
                    }
                }
                $square = new Square($colorSquare, $x, $y, $piece);
                $this->board[] = $square;

                if ($piece instanceof Piece) {
                    echo "c'est une pièce !!";
                    echo "</br>";
                }

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