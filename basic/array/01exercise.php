<?php

$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2165, 1457, 2456
];


echo "Original numeric array: ";

foreach($numbers as $value){
    echo ($value). " ";
}
echo PHP_EOL;

echo "Sorted numeric array: ";
sort($numbers, SORT_NUMERIC);
foreach($numbers as $value){
    echo ($value). " ";
}

$words = [
    "Java",
    "Python",
    "PHP",
    "C#",
    "C Programming",
    "C++"
];

echo PHP_EOL.PHP_EOL;
echo "Original string array: ";
foreach ($words as $value){
    echo ($value). " ";
}

echo PHP_EOL;
echo "Sorted string array: ";
sort($words, SORT_STRING);
foreach ($words as $value){
    echo ($value). " ";
}