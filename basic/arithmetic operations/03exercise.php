<?php

$lowerBound = readline("Input first number : ") . PHP_EOL;
$upperBound = readline("Input second number : ") . PHP_EOL;

$sumOfNumbers = 0;

if ($lowerBound > $upperBound) {
    echo "Second number can't be less then first number" . PHP_EOL;
    $lowerBound = readline("Input first number : ") . PHP_EOL;
    $upperBound = readline("Input second number : ") . PHP_EOL;
}

for ($i = intval($lowerBound); $i <= intval($upperBound); $i++) {
    $sumOfNumbers += $i;

}

echo "Sum of numbers : $sumOfNumbers" . PHP_EOL
    . "Average : " . $sumOfNumbers / intval($upperBound);
