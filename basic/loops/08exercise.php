<?php

$numberOfMin = intval(readline("Min? "));
$numberOfMax = intval(readline("Max? "));

$numbersArray = [];
for ($i = $numberOfMin; $i <= $numberOfMax; $i++) {
    array_push($numbersArray, $i);
}

for ($i = 0; $i < count($numbersArray); $i++) {
    echo $numbersArray[$i];
}
echo PHP_EOL;

for ($i = $numberOfMin; $i <= 1; $i++) {
    for ($j = $numberOfMin; $j < $numberOfMax; $j++) {
        array_shift($numbersArray);
        array_push($numbersArray, $j);
        for ($k = 0; $k < count($numbersArray); $k++) {
            echo $numbersArray[$k];
        }
        echo PHP_EOL;
    }
}