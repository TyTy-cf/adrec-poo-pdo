<?php

include_once '../../models/steamish/Game.php';
include_once '../../repository/GameRepository.php';

$gameRepository = new GameRepository();

//var_dump($gameRepository->findAll());
//var_dump($gameRepository->findOneById(40));
//var_dump($gameRepository->findGamesByApproxName('war'));
//var_dump($gameRepository->findGamesBetween(new DateTime('2018-01-01 00:00:00'), new DateTime()));

//$gameRepository->createTableExample();

//$game = (new Game())
//    ->setName('Pokémon : Ecarlate')
//    ->setSlug('pokemon-ecarlate')
//    ->setPrice(44.0)
//    ->setPublishedAt('2022-11-19 00:00:00')
//    ->setPublisherId(null)
//    ->setDescription('Oui')
//    ->setThumbnailCover('https://www.pokepedia.fr/images/thumb/d/dc/Jaquette_de_Pok%C3%A9mon_%C3%89carlate.png/300px-Jaquette_de_Pok%C3%A9mon_%C3%89carlate.png')
//    ->setThumbnailLogo(null)
//;
//var_dump($game);
//$game = $gameRepository->addGame($game);
//var_dump($game);
