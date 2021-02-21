<?php

$counter = 1;

for ($i = 1; $i <= 110; $i++) {
    if ($i % 3 === 0) {
        echo "Coza ";
    }
    if ($i % 5 === 0) {
        echo "Loza ";
    }
    if ($i % 7 === 0) {
        echo "Woza ";
    }
    if ($i % 3 === 0 && $i % 5 === 0) {
        echo "CozaLoza ";
    }
    if ($i % 3 === 0 && $i % 5 === 0 && $i % 7 === 0) {
        echo "CozaLozaWoza ";
    } else {
        echo "$i ";
    }
    if ($counter === 11) {
        $counter = 0;
        echo PHP_EOL;
    }
    $counter++;
}
