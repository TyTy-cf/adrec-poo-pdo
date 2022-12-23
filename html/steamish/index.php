<?php

include_once '../../html/partials/_header.php';

include_once '../../models/steamish/Game.php';
include_once '../../repository/GameRepository.php';

$gameRepo = new GameRepository();

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
</div>

<?php

include_once '../../html/partials/_footer.php';

?>
