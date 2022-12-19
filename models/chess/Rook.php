<?php

include_once 'Piece.php';

class Rook extends Piece
{

    public function move(): void
    {
        echo 'Move dans la classe Rook';
        echo '</br>';
    }

}