<?php

include_once 'models/cours/Brand.php';
include_once 'models/cours/Model.php';

$ford = new Brand('Ford');

$escort = new Model();
$escort->setBrand($ford);
$escort->setName('Escort');

$fiesta = new Model();
$fiesta->setBrand($ford);
$fiesta->setName('Fiesta');

?>

<p> <?php echo $fiesta ?> </p>
<p> <?php echo $escort ?> </p>
