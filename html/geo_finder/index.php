<?php

include_once '../partials/_header.php';

include_once '../../models/geo_finder/User.php';
include_once '../../models/geo_finder/GeoGame.php';

session_start();

$user = null;

if (isset($_SESSION['user'])) {
    $user = unserialize($_SESSION['user']);

    $game = new Game();
    $game->setUser($user);
}

// Instancier les maps
$world = new Map();
$world->setName('World');
$world->setImage('https://www.geoguessr.com/images/auto/336/168/ce/0/plain/map/3f950f0318b9086b1b9ec591206dfdd8.jpg');

// etc...

$maps = [$world];

?>

<div class="container">
    <?php if ($user !== null) { ?>
    <div class="d-flex justify-content-between">
        <h1>Nouvelle partie !</h1>
        <div class="user">
            <p><?= $user->getUsername() ?></p>
            <strong>LvL. <?= $user->getLevel() ?></strong>
        </div>
    </div>
    <div>
        <h2>Les cartes disponibles</h2>

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
    <?php } else { ?>
        <p>Vous devez vous connecter pour voir cette page</p>
    <?php } ?>
</div>

<?php

include_once '../partials/_footer.php';

?>