<?php

require_once 'Flower.php';
require_once 'WarehouseAlfa.php';
require_once 'WarehouseBeta.php';
require_once 'FlowersInterface.php';

$flowersAlfa = new WarehouseAlfa();
$flowersAlfa->addFlowersToAlfaArray([
    new Flower("Rose", 100, 100),
    new Flower("Tulip", 320, 40),
    new Flower("Freesia", 50, 400),
]);

$flowersBeta = new WarehouseBeta();
$flowersBeta->addFlowersToBetaArray([
    new Flower("Orchid", 30, 200),
    new Flower("Daffodil", 320, 30),
]);

$mainShop = array_merge($flowersAlfa->getFlowersFromWarehouse(), $flowersBeta->getFlowersFromWarehouse());

$clientInput = intval(readline("If WOMEN press 1, if else MEN press 2 : "));

if ($clientInput === 1) {
    foreach ($mainShop as $value) {
        echo $value->getName() . " quantity - (" . $value->getAmount() . ') '
            . " Price : " . number_format($value->discountForWomen() / 100, 2) . PHP_EOL;

    }
    $clientChoice = readline("Enter a flower which you want: ");
    $clientAmount = intval(readline("Enter amount: "));
    foreach ($mainShop as $value) {
        if ($clientChoice === $value->getName() && $clientAmount <= $value->getAmount()) {
            $value->decreaseAmount($clientAmount);
            echo "Your order: " . $value->getName() . ", " . $clientAmount . " pcs. " . "Total Price: " . number_format($value->discountForWomen() / 100, 2) * $clientAmount;
        }
    }

}
if ($clientInput === 2) {
    foreach ($mainShop as $value) {
        echo $value->getName() . " quantity - (" . $value->getAmount() . ') '
            . " Price : " . number_format(($value->getPrice() / 100), 2) . PHP_EOL;
    }
    $clientChoice = readline("Enter a flower which you want: ");
    $clientAmount = intval(readline("Enter amount: "));
    foreach ($mainShop as $value) {
        if ($clientChoice === $value->getName() && $clientAmount <= $value->getAmount()) {
            $value->decreaseAmount($clientAmount);
            echo "Your order: " . $value->getName() . ", " . $clientAmount . " pcs. " . "Total Price: " . number_format($value->getPrice() / 100, 2) * $clientAmount;
        }
    }
}
