<?php
require_once 'EnergyDrinkResearch.php';

$research = new EnergyDrinkResearch();

$research->setSurveyedPeople(12467);
$research->setPurchasedEnergyDrinks(14);
$research->setPreferCitrusDrinks(64);

echo "Total number of people surveyed " . $research->getSurveyedPeople() . PHP_EOL;
echo "Approximately " . $research->calculateEnergyDrinkers($research->getSurveyedPeople(), $research->getPurchasedEnergyDrinks()) . " bought at least one energy drink" . PHP_EOL;
echo $research->calculatePreferCitrus() . " of those " . "prefer citrus flavored energy drinks.";
