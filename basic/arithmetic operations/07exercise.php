<?php

function gravityFormula(float $a, int $t, int $v, int $x): float
{
    return 0.5 * ($a * $t ** 2) + ($v * $t) + ($x);
}

echo gravityFormula(-9.81, 10, 0, 0);