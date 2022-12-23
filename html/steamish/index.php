<?php

include_once '../../html/partials/_header.php';

include_once '../../models/steamish/Game.php';
include_once '../../models/steamish/Genre.php';
include_once '../../models/steamish/Country.php';
include_once '../../repository/GameRepository.php';
include_once '../../repository/GenreRepository.php';
include_once '../../repository/CountryRepository.php';

$gameRepo = new GameRepository();
$genreRepo = new GenreRepository();
$countryRepo = new CountryRepository();

?>

<div class="container">
    <h2 class="my-3">Les dernières sorties</h2>
    <div class="row">
        <?php
        foreach ($gameRepo->findLastReleased(4) as $lastReleased) {
            /** @var Game $lastReleased */
            ?>
            <div class="col-3">
                <div class="container-img">
                    <img alt="<?= $lastReleased->getName() ?>"
                         src="<?= $lastReleased->getThumbnailCover() ?>"
                    >
                    <div class="container-infos">
                        <?= $lastReleased->getPrice() ?>€
                    </div>
                </div>
                <p class="text-center">
                    <strong><?= $lastReleased->getName() ?></strong>
                </p>
            </div>
            <?php
        }
        ?>
    </div>

    <h2 class="my-3">Les plus joués</h2>
    <div class="row">
        <?php
        foreach ($gameRepo->findMostPlayed(4) as $lastReleased) {
            /** @var Game $lastReleased */
            ?>
            <div class="col-3">
                <div class="container-img">
                    <img alt="<?= $lastReleased->getName() ?>"
                         src="<?= $lastReleased->getThumbnailCover() ?>"
                    >
                    <div class="container-infos">
                        <?= $lastReleased->getPrice() ?>€
                    </div>
                </div>
                <p class="text-center">
                    <strong><?= $lastReleased->getName() ?></strong>
                </p>
            </div>
            <?php
        }
        ?>
    </div>

    <h2 class="my-3">Les plus vendus</h2>
    <div class="row">
        <?php
        foreach ($gameRepo->findBestSellers(4) as $lastReleased) {
            /** @var Game $lastReleased */
            ?>
            <div class="col-3">
                <div class="container-img">
                    <img alt="<?= $lastReleased->getName() ?>"
                         src="<?= $lastReleased->getThumbnailCover() ?>"
                    >
                    <div class="container-infos">
                        <?= $lastReleased->getPrice() ?>€
                    </div>
                </div>
                <p class="text-center">
                    <strong><?= $lastReleased->getName() ?></strong>
                </p>
            </div>
            <?php
        }
        ?>
    </div>

    <h2 class="my-3">Les tendances</h2>
    <div class="row">
        <?php
        foreach ($gameRepo->findTendencies(4) as $lastReleased) {
            /** @var Game $lastReleased */
            ?>
            <div class="col-3">
                <div class="container-img">
                    <img alt="<?= $lastReleased->getName() ?>"
                         src="<?= $lastReleased->getThumbnailCover() ?>"
                    >
                    <div class="container-infos">
                        <?= $lastReleased->getPrice() ?>€
                    </div>
                </div>
                <p class="text-center">
                    <strong><?= $lastReleased->getName() ?></strong>
                </p>
            </div>
            <?php
        }
        ?>
    </div>

    <h2 class="my-3">Les genres</h2>
    <div class="row mb-5">
        <?php
        foreach ($genreRepo->findAll() as $genre) {
            /** @var Genre $genre */
            ?>
            <div class="col-3">
                <a  class="text-center"
                    href="game_by_genre.php?genreId=<?= $genre->getId() ?>"
                >
                    <strong><?= $genre->getName() ?></strong>
                </a>
            </div>
            <?php
        }
        ?>
    </div>

</div>

<?php

include_once '../../html/partials/_footer.php';

?>
