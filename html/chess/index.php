<?php

include_once '../../models/chess/Chess.php';

$chess = new Chess();

?>

<!-- A remplacer, mais indication de comment passer un attribut comme étant une classe CSS -->
<div class="<?= $chess->getBoard()[0]->getColor() ?>">

</div>