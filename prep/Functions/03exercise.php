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

function isMature($persons): void
{
    foreach($persons as $value) {
        if ($value->age >= 18) {
            echo "{$value->name} has reached the age of 18" . PHP_EOL;
        } else {
            echo "{$value->name} is not reached" . PHP_EOL;
        }
    }
}

isMature($people);