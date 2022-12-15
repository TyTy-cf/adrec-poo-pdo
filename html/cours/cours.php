<?php

include_once '../../models/cours/Brand.php';
include_once '../../models/cours/Model.php';

// Appeller le constructeur de Brand, qui prend 2 paramètres
$ford = new Brand(1, 'Ford');

// Ici on ne passe aucun paramètre à Model() car on a aucun constructeur => constructeur vide
$escort = new Model(); // => appel IMPLICITEMENT le constructeur
$escort->setBrand($ford); // => appelle la fonction setBrand de notre objet
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
