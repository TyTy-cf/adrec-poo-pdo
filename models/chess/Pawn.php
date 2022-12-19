<?php

include_once 'Piece.php';

// La classe "Pawn" EST UNE EXTENSION de la classe "Piece"
// Pawn EST UNE Piece
class Pawn extends Piece
{

    public function move(): void
    {
        echo 'Move dans la classe Pawn';
        echo '</br>';
    }
}