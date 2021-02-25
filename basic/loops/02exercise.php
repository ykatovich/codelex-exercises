<?php

$inputNumber = readline("Input a number: ");

$nTimes = readline("How many times need to multiply $inputNumber with itself: ");

$powResult = $inputNumber;

for ($i = 1; $i < $nTimes; $i++) {
    $powResult *= $inputNumber;
}
echo $powResult;