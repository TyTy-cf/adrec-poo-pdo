<?php

include_once '../../html/partials/_header.php';

include_once '../../models/steamish/Game.php';
include_once '../../models/steamish/Genre.php';
include_once '../../repository/GameRepository.php';
include_once '../../repository/GenreRepository.php';

$gameRepo = new GameRepository();
$genreRepo = new GenreRepository();

$genreId = $_GET['genreId'];

var_dump($genreRepo->findOneBy(['id' => $genreId]));





// récupérer l'objet genre depuis le genreRepository

// récupérer les objets game depuis le gameRepository à partir de l'objet Genre (récupéré précédemment)

// => page html
// => afficher le nom du genre en titre de page
// => parcourir le tableau des jeux et afficher leur cards dans l'HTML