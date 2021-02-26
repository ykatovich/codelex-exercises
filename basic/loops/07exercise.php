<?php

$desiredSum = intval(readline("What is desired sum ? (from 2 to 12) "));

while ($desiredSum < 2 || $desiredSum > 12) {
    $desiredSum = intval(readline("Error. What is desired sum ? "));
}
echo "Desired sum: $desiredSum";

while (true) {

    $firstRoll = rand(1, 6);
    $secondRoll = rand(1, 6);

    if ($firstRoll + $secondRoll === $desiredSum) {
        echo $firstRoll . " and " . $secondRoll, " = " . ($firstRoll + $secondRoll) . PHP_EOL;
        exit();
    } else {
        echo $firstRoll . " and " . $secondRoll, " = " . ($firstRoll + $secondRoll) . PHP_EOL;
    }
}