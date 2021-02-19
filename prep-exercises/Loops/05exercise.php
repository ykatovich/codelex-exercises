<?php

$max = new stdClass();
$max->name = "Max";
$max->surname = "Payne";
$max->age = 50;
$max->birthday = "20-12-1971";

$taira = new stdClass();
$taira->name = "Taira";
$taira->surname = "Watson";
$taira->age = 40;
$taira->birthday = "01-01-1981";

$freddy = new stdClass();
$freddy->name = "Freddy";
$freddy->surname = "Kruger";
$freddy->age = 30;
$freddy->birthday = "02-12-1991";

$people = [
    $max,
    $taira,
    $freddy
];

foreach ($people as $person) {
    foreach ($person as $value) {
        echo "$value" . PHP_EOL;
    }
}