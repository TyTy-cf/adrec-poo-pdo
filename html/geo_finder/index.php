<?php

include_once '../partials/_header.php';

include_once '../../models/geo_finder/User.php';

$user = new User();
$user->setUsername('Bébert');

?>

<div class="container">
    <div class="d-flex justify-content-between">
        <h1>Nouvelle partie !</h1>
        <div>
            <p><?= $user->getUsername() ?></p>
            <strong>LvL. <?= $user->getLevel() ?></strong>
        </div>
    </div>
    <div>

    </div>
</div>

<?php

include_once '../partials/_footer.php';

?>