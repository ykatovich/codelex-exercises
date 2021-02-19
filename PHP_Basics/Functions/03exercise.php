<?php

$mark = new stdClass();
$mark->name = "Mark";
$mark->surname = "Tucker";
$mark->age = 20;


function isMature(stdClass $mark): string
{
    return $mark->age >= 18;
}

if (isMature($mark)) {
    echo "$mark->name has reached age of 18";
}