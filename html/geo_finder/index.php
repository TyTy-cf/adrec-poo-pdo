<?php

include_once '../partials/_header.php';

include_once '../../models/geo_finder/User.php';
include_once '../../models/geo_finder/Game.php';

$user = new User();
$user->setUsername('Bébert');

$game = new Game();
$game->setUser($user);
$game->setHasZoom(true);

?>

<div class="container">
    <div class="d-flex justify-content-between">
        <h1>Nouvelle partie !</h1>
        <div class="user">
            <p><?= $user->getUsername() ?></p>
            <strong>LvL. <?= $user->getLevel() ?></strong>
        </div>
    </div>
    <div>
        <div>
            Rotation ?
            <input type="radio" name="game_pan"
                   <?php if ($game->isHasPan()) { ?>checked<?php } ?>
            > Oui
            <input type="radio" name="game_pan"
                   <?php if (!$game->isHasPan()) { ?>checked<?php } ?>
            > Non
        </div>
        <div class="my-3">
            Zoom ?
            <input type="radio" name="game_zoom"
                   <?php if ($game->isHasZoom()) { ?>checked<?php } ?>
            > Oui
            <input type="radio" name="game_zoom"
                   <?php if (!$game->isHasZoom()) { ?>checked<?php } ?>
            > Non
        </div>
        <div>
            Déplacement ?
            <input type="radio" name="game_move"
                   <?php if ($game->isHasMove()) { ?>checked<?php } ?>
            > Oui
            <input type="radio" name="game_move"
                   <?php if (!$game->isHasMove()) { ?>checked<?php } ?>
            > Non
        </div>
    </div>
</div>

<?php

include_once '../partials/_footer.php';

?>