<?php

require_once 'Gamer.php';

$moneyWon = 0;
$gamer = new Gamer();

$gameElements = [
    "A" => 10,
    "B" => 15,
    "C" => 20,
    "D" => 25,
    "X" => 50,
];

$gamer->setMoney(intval(readline("Enter the amount you want to play with: ")));

while (true) {

    $gamer->setBid(intval(readline("Your bid ? (min 10, step 10) : ")));
    $gamer->setTheNumberOfSpins(readline("How many times to spin it? "));

    while ($gamer->getTheNumberOfSpins() !== 0) {

        $gamer->decreaseTheNumberOfSpins();

        while ($gamer->getMoney() < $gamer->getBid()) {
            echo "Not enough money" . PHP_EOL;
            $gamer->setBid(readline("Your bid ? : "));
        }

        $spin = [
            $line1 = array_rand($gameElements, 3),
            $line2 = array_rand($gameElements, 3),
            $line3 = array_rand($gameElements, 3)
        ];

        foreach ($spin as $line) {
            echo implode(" ", $line) . PHP_EOL;
            sleep(1);
        }

        if ($line1[0] === $line1[1] && $line1[1] === $line1[2]) {
            if ($line1[0] === "X") {
               $gamer->increaseTheNumberOfSpins();
                echo "You won 5 free spins!";
            }
            $moneyWon += ($gameElements[$line1[0]] * ($gamer->getBid() / 10));
            $gamer->increaseMoney($moneyWon);
        }

        if ($line2[0] === $line2[1] && $line2[1] === $line2[2]) {
            if ($line1[0] === "X") {
                $gamer->increaseTheNumberOfSpins();
                echo "You won 5 free spins!";
            }
            $moneyWon += ($gameElements[$line2[0]] * ($gamer->getBid() / 10));
            $gamer->increaseMoney($moneyWon);
        }

        if ($line3[0] === $line3[1] && $line3[1] === $line3[2]) {
            if ($line1[0] === "X") {
                $gamer->increaseTheNumberOfSpins();
                echo "You won 5 free spins!";
            }
            $moneyWon += ($gameElements[$line3[0]] * ($gamer->getBid() / 10));
            $gamer->increaseMoney($moneyWon);
        }

        if ($line1[0] === $line2[1] && $line2[1] === $line3[2]) {
            if ($line1[0] === "X") {
                $gamer->increaseTheNumberOfSpins();
                echo "You won 5 free spins!";
            }
            $moneyWon += ($gameElements[$line1[0]] * ($gamer->getBid() / 10));
            $gamer->increaseMoney($moneyWon);
        }

        if ($line1[2] === $line2[1] && $line2[1] === $line3[0]) {
            if ($line1[0] === "X") {
                $gamer->increaseTheNumberOfSpins();
                echo "You won 5 free spins!";
            }
            $moneyWon += ($gameElements[$line1[0]] * ($gamer->getBid() / 10));
            $gamer->increaseMoney($moneyWon);
        }

        if ($gamer->getMoney() !== 0) {
            $gamer->decreaseMoney($gamer->getBid());

        }
        if ($gamer->getMoney() < 0 || $gamer->getMoney() === 0) {
            echo "Game over";
            exit();
        }

        echo "Your money :" . $gamer->getMoney() . PHP_EOL;
    }
}


