<?php


$animals = ["sheep", "sheep", "sheep", "wolf", "sheep", "wolf", "sheep", "sheep"];

for ($i = 0; $i < count($animals); $i++) {
    if (isset($animals[$i - 1]) && $animals[$i - 1] === 'wolf'
        || isset($animals[$i + 1]) && $animals[$i + 1] === 'wolf') {
        echo "OMG ";
    } else if ($animals[$i] === 'sheep') {
        echo "Happy ";
    } else {
        echo "HEHE ";
    }
}