<?php

echo "Welcome to Piglet!" . PHP_EOL;
$sum = 0;

while (true) {
    $randomResult = rand(1, 6);

    echo "You rolled a " . $randomResult . PHP_EOL;
    $sum += $randomResult;

    if ($randomResult === 1) {
        echo "You got 0 points" . PHP_EOL;
        exit();
    }


    $question = readline("Roll again ? y / n: ");

    if ($question === "y") {
        echo "You rolled a " . $randomResult . PHP_EOL;
    } else if ($question === "n") {
        echo "You got $sum points";
        exit();
    }
}