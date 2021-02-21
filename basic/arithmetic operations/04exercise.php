<?php

function factorial(int $value): int
{
    $sumOfNumbers = 1;
    for ($i = 1; $i <= $value; $i++) {
        $sumOfNumbers *= $i;
    }
    return $sumOfNumbers;
}

echo factorial(10);