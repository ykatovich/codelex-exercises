<?php


$mark = new stdClass();
$mark->name = "Mark";
$mark->surname = "Tucker";
$mark->age = 20;

$anna = new stdClass();
$anna->name = "Anna";
$anna->surname = "Karena";
$anna->age = 15;

$tim = new stdClass();
$tim->name = "Tim";
$tim->surname = "Gustafson";
$tim->age = 30;

$people = [
    $mark,
    $anna,
    $tim
];

function isMature($people): string
{
    return $people->age >= 18;
}

foreach ($people as $person)
    if (isMature($person)) {
        echo "$person->name has reached age of 18" . PHP_EOL;
    }