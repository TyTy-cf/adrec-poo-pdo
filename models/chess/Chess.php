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
        $colorSquare = 'white';
        for ($y = 8; $y >= 1; $y--) {
            for ($x = 1; $x <= 8; $x++) {
                $piece = null;
                $colorPiece = 'black';
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

                if ($x < 8) {
                    if ($colorSquare === 'white') {
                        $colorSquare = 'black';
                    } else {
                        $colorSquare = 'white';
                    }
                }
            }
        }
        var_dump($this->board);
    }

    /**
     * @return Square[]
     */
    public function getBoard(): array
    {
        return $this->board;
    }

}