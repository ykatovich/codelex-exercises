<?php

$products = [
    [
        "name" => "Vehicle",
        "price" => 100,

    ],
    [
        "name" => "Iphone",
        "price" => 50,
    ],
    [
        "name" => "Display",
        "price" => 30,
    ],
    [
        "name" => "Cake",
        "price" => 5,
    ],
];
for ($i = 0; $i < count($products); $i++) {
    echo $products[$i]["name"] . ": " . $i . "\n";
}
$clientsOrder = readline("What are you want? ");

$amount = readline("Amount? ");

function order($products, $clientsOrder, $amount): string
{
    return "Your order : {$products[$clientsOrder]["name"]} ($amount pcs). Price : ". $products[$clientsOrder]["price"] * $amount;

}

echo order($products,$clientsOrder, $amount);