<?php

include_once '../partials/_header.php';
include_once '../../models/ecommerce/Category.php';

$mainCateg1 = new Category();
//

?>

<div>

    <h2>
        Informatique, Tablettes
        <?= $mainCateg1->getLabel() ?>
    </h2>
    <ul>
        <li>
            Informatique, Tablettes
        </li>
        <li>
            ORDINATEURS PORTABLES
        </li>
        <li>
            ORDINATEURS DE BUREAU,
            ECRANS PC
        </li>
    </ul>

</div>
