<?php

$fruits = [
    [
        "name" => "Banana",
        "weight" => 1,
    ],
    [
        "name" => "Watermelon",
        "weight" => 12,
    ],
    [
        "name" => "Orange",
        "weight" => 5,
    ],
    [
        "name" => "Pineapple",
        "weight" => 11,
    ],
];

$deliveryPrice = [
    "costOver10kg" => 2,
    "costUpTo10kg" => 1,
];


function ifFruitHasWeightOver10kg($fruits, $delivery): int
{
    if ($fruits["weight"] > 10) {
        return $delivery["costOver10kg"];
    } else {
        return $delivery["costUpTo10kg"];
    }
}

foreach ($fruits as $value) {
    echo $value["name"] . "'s delivery price will be "
        . ifFruitHasWeightOver10kg($value, $deliveryPrice)
        . " euro" . PHP_EOL;
}