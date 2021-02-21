<?php

function fromKgToPounds(float $value): float
{
    return $value * 2.20462;
}

function fromCmToInches(float $value): float
{
    return $value * 0.393701;
}

function bodyMassIndex(float $weight, float $height): float
{
    return (round(fromKgToPounds(intval($weight)), 1) * 703) / round(fromCmToInches(intval($height)), 1) ** 2;
}

$personWeight = readline("Enter your weight (in kg) : ");
$personHeight = readline("Enter your height (in cm) : ");

echo "Your weight in pounds is " . round(fromKgToPounds(intval($personWeight)), 1) . PHP_EOL;
echo "Your height in inches is " . round(fromCmToInches(intval($personHeight)), 1) . PHP_EOL;

if (round(bodyMassIndex($personWeight, $personHeight), 1) < 18.5) {
    echo "BMI is " . round(bodyMassIndex($personWeight, $personHeight), 1) . ". You have underweight." . PHP_EOL;
} else if (round(bodyMassIndex($personWeight, $personHeight), 1) >= 18.5
    && round(bodyMassIndex($personWeight, $personHeight), 1) <= 25) {
    echo "BMI is " . round(bodyMassIndex($personWeight, $personHeight), 1) . ". You have optimal weight." . PHP_EOL;
} else {
    echo "BMI is " . round(bodyMassIndex($personWeight, $personHeight), 1) . ". You have overweight." . PHP_EOL;
};