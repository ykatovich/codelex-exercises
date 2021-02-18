<?php

$mixedArray = [
    5,
    10,
    20,
    10.5,
    "Codelex"
];

function doubleInteger($mixedArray)
{
    for ($i = 0; $i < count($mixedArray); $i++) {
        if (is_int($mixedArray[$i])) {
            echo ($mixedArray[$i] *= $mixedArray[$i]) . PHP_EOL;
        }
    }
}

doubleInteger($mixedArray);
