<?php

include_once '../../models/cours/Brand.php';
include_once '../../models/cours/Model.php';

$ford = new Brand(1, 'Ford');

$escort = new Model(); // => nouvelle instance de la classe Model (donc un objet)
$escort->setBrand($ford);
$escort->setName('Escort');

$fiesta = new Model(); // => nouvelle instance de la classe Model (donc un objet)
$fiesta->setBrand($ford);
$fiesta->setName('Fiesta');

include_once '../partials/_header.php';

?>

<div class="container">
    <p> <?php echo $escort->getBrand() ?> </p>
    <p> <?php echo $fiesta->getName() ?> </p>
    <p> <?php echo $escort->getName() ?> </p>
</div>

<?php //for($i = 0; $i < 20; $i++) { ?>
<!--    --><?php //$tmpModel = new Model(); ?>
<!--    --><?php //$tmpModel->setName('Car name #'.$i); ?>
<!--    <p>--><?php //var_dump($tmpModel); ?><!--</p>-->
<?php //} ?>

<?php

include_once '../partials/_footer.php';

?>
