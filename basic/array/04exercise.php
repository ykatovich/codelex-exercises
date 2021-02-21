<?php

$numbers = [];

for ($i = 0; $i < 10; $i++) {
    array_push($numbers, rand(1, 100));
}

$copyOfNumbers = $numbers;

array_pop($numbers);
array_push($numbers, -7);

foreach ($numbers as $value) {
    echo $value . " ";
}
echo PHP_EOL;

foreach ($copyOfNumbers as $value) {
    echo $value . " ";
}