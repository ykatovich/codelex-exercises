<?php

require_once "Date.php";

$date = new Date();
$date->setMonth();
$date->setYear();
$date->setDay();

echo $date->displayDate();