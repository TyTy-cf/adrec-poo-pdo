<?php

include_once '../partials/_header.php';
include_once '../../models/ecommerce/Category.php';

// Déclaration de la catégorie Info/tablettes
$mainCategoryInfo = new Category();
$mainCategoryInfo->setLabel('Informatique, Tablettes');

$subCategoryLaptop = new Category();
$subCategoryLaptop->setLabel('Ordinateurs, portables');

$subCategoryPC = new Category();
$subCategoryPC->setLabel('Ordinateurs de bureau, écran PC');

$mainCategoryInfo->addChildren($subCategoryPC);
$mainCategoryInfo->addChildren($subCategoryLaptop);

// Déclaration de la catégorie Son/casques/enceintes
$secondMainCategoryInfo = new Category(); // Principale
$secondMainCategoryInfo->setLabel('Son, casques, enceintes');

$subCategorySound = new Category(); // Sous catégorie
$subCategorySound->setLabel('SON, CASQUE, ENCEINTE, HIFI');

$subCategoryHeadset = new Category(); // Sous catégorie
$subCategoryHeadset->setLabel('CASQUE & ECOUTEUR');

$subCategoryWirelessBluetooth = new Category(); // Sous-sous catégorie
$subCategoryWirelessBluetooth->setLabel('Casque bluetooth, sans fil');

$subCategoryWire = new Category(); // Sous-sous catégorie
$subCategoryWire->setLabel('Casque filaire');

$subCategorySpeaker = new Category(); // Sous catégorie
$subCategorySpeaker->setLabel('ENCEINTE & PETIT AUDIO');

$secondMainCategoryInfo->addChildren($subCategorySound);
$secondMainCategoryInfo->addChildren($subCategoryHeadset);
$secondMainCategoryInfo->addChildren($subCategorySpeaker);

$subCategoryHeadset->addChildren($subCategoryWirelessBluetooth);
$subCategoryHeadset->addChildren($subCategoryWire);

// SELECT * FROM category WHERE category.parent IS NULL
$mainCategories = [$mainCategoryInfo, $secondMainCategoryInfo];

?>

<div class="container">
    <div class="row">
        <?php foreach ($mainCategories as $mainCategory) { ?>
            <div class="col-4">
                <h2>
                    <?= $mainCategory->getLabel() ?>
                </h2>
                <ul>
                    <?php foreach ($mainCategory->getChildren() as $child) { ?>
                    <li>
                        <?= $child->getLabel() ?>
                        <?php if (sizeof($child->getChildren()) > 0) { ?>
                            <ul>
                                <?php foreach ($child->getChildren() as $subChild) { ?>
                                    <li>
                                        <?= $subChild->getLabel() ?>
                                    </li>
                                <?php } ?>
                            </ul>
                        <?php } ?>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        <?php } ?>
    </div>
</div>
