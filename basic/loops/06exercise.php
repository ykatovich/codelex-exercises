<?php

$asciiFigure = readline("Input number of size: ");

for ($i = 0; $i < $asciiFigure - 1; $i++) {
    for ($j = 0; $j < ($asciiFigure - 1) - $i; $j++) {
        echo "////";
    }
    for ($j = 0; $j < $i; $j++) {
        echo "********";
    }
    for ($k = 0; $k < ($asciiFigure - 1) - $i; $k++) {
        echo "\\\\\\\\";
    }
    echo PHP_EOL;
}

for ($m = 1; $m <= $asciiFigure - 1; $m++) {
    echo "********";
}