<?php

function twoIntegers(int $numberA, int $numberB): string
{
    if ($numberA === 15
        || $numberB === 15
        || ($numberA + $numberB) === 15
        || ($numberA - $numberB) === 15
        || ($numberB - $numberA) === 15) {
        return "true";
    }
    return "false";
}

echo twoIntegers(1, 14);