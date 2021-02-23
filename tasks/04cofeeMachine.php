<?php

$offer = [
    [
        "name" => "Latte",
        "price" => 95,
    ],
    [
        "name" => "Macchiato",
        "price" => 150,
    ],
    [
        "name" => "Espresso",
        "price" => 190,
    ],

];

$myMoney = [
    1 => 4,
    2 => 3,
    5 => 5,
    10 => 2,
    20 => 2,
    50 => 2,
    100 => 2,
];

$insertCoinSum = 0;
$change = 0;

function myWallet(array $myMoney): float
{
    $sum = 0;
    foreach ($myMoney as $value => $numberOfCoins) {
        $sum += ($numberOfCoins * $value) / 100;
    }
    return $sum;
}

echo "You have $" . myWallet($myMoney) . PHP_EOL;
echo "Your coins: ";
foreach ($myMoney as $keyValue => $numberOfCoins) {
    echo $keyValue . " " . "(" . $numberOfCoins . "pcs) | ";
}
echo PHP_EOL;

for ($i = 0; $i < count($offer); $i++) {
    $productPrice = $offer[$i]['price'] / 100;
    echo $offer[$i]['name'] . " $" . number_format($productPrice, 2) . PHP_EOL;
}

$clientChoice = intval(readline("Enter your choice(0: Latte, 1: Macchiato, 2: Espresso) : "));

while (true) {

    if ($clientChoice === 0 || $clientChoice === 1 || $clientChoice === 2)
        echo "Your choice is " . $offer[$clientChoice]['name'] . " $" . number_format($offer[$clientChoice]['price'] / 100, 2) . PHP_EOL;

    $inputCoin = intval(readline("Input a coin: "));

    while ($myMoney[$inputCoin] < 0) {
        $inputCoin = intval(readline("Use coins which you have: "));
    }
    while (!array_key_exists($inputCoin, $myMoney)) {
        $inputCoin = intval(readline("You do not have such coins. Input a coin "));
    }
    $myMoney[$inputCoin]--;
    $insertCoinSum += ($inputCoin / 100);
    echo "Inputted : $" . number_format($insertCoinSum, 2) . PHP_EOL;

    if ($insertCoinSum === ($offer[$clientChoice]['price'] / 100)) {
        echo "Your {$offer[$clientChoice]['name']} is ready." . PHP_EOL;
        exit();
    }
    if ($insertCoinSum > ($offer[$clientChoice]['price'] / 100)) {
        $change = ($insertCoinSum * 100) - ($offer[$clientChoice]['price']);
        echo "Your {$offer[$clientChoice]['name']} is ready." . PHP_EOL;
        foreach (array_reverse($myMoney, true) as $key => $value) {
            if ($key <= $change) {
                $change -= $key;
                echo "Change : " . number_format($key / 100, 2) . PHP_EOL;
            }
        }
        exit();
    }
}

