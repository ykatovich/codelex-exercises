<?php

$mixedArray = [
    5,
    10,
    20,
    10.5,
    "Codelex"
];

function doubleInteger(int $intValue): int
{
    return pow($intValue, 2);
}


foreach ($mixedArray as $value) {
    if (is_int($value)) {
        echo doubleInteger($value) . PHP_EOL;
    }
}
