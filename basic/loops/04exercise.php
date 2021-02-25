<?php

$clientsChoice = readline("Max value? ");
$counter = 0;

for ($i = 1; $i <= $clientsChoice; $i++) {
    if ($i % 3 === 0 && $i % 5 === 0) {
        echo "FizzBuzz ";
    } else if ($i % 3 === 0) {
        echo "Fizz ";
    } else if ($i % 5 === 0) {
        echo "Buzz ";
    } else {
        echo $i . " ";
    }
    $counter++;
    if ($counter === 20) {
        $counter = 0;
        echo PHP_EOL;
    }
}

