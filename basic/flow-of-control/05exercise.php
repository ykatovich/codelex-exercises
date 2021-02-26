<?php

$phoneKeyPad = strtoupper(readline("Enter a string:  "));

$phoneKeyPadArray = str_split($phoneKeyPad);

foreach ($phoneKeyPadArray as $value) {
    switch ($value) {
        case "A":
        case "B":
        case "C":
        {
            echo 2;
            break;
        }
        case "D":
        case "E":
        case "F":
        {
            echo 3;
            break;
        }
        case "G":
        case "H":
        case "I":
        {
            echo 4;
            break;
        }
        case "J":
        case "K":
        case "L":
        {
            echo 5;
            break;
        }
        case "M":
        case "N":
        case "O":
        {
            echo 6;
            break;
        }
        case "P":
        case "Q":
        case "R":
        case "S":
        {
            echo 7;
            break;
        }
        case "T":
        case "U":
        case "V":
        {
            echo 8;
            break;
        }
        case "W":
        case "X":
        case "Y":
        case "Z":
            echo 9;
            break;
    }
}

echo PHP_EOL;

for ($i = 0; $i < strlen($phoneKeyPad); $i++) {
    if ($phoneKeyPad[$i] === "A" || $phoneKeyPad[$i] === "B" || $phoneKeyPad[$i] === "C") {
        echo 2;
    } else if ($phoneKeyPad[$i] === "D" || $phoneKeyPad[$i] === "E" || $phoneKeyPad[$i] === "F") {
        echo 3;
    } else if ($phoneKeyPad[$i] === "G" || $phoneKeyPad[$i] === "H" || $phoneKeyPad[$i] === "I") {
        echo 4;
    } else if ($phoneKeyPad[$i] === "J" || $phoneKeyPad[$i] === "K" || $phoneKeyPad[$i] === "L") {
        echo 5;
    } else if ($phoneKeyPad[$i] === "M" || $phoneKeyPad[$i] === "N" || $phoneKeyPad[$i] === "O") {
        echo 6;
    } else if ($phoneKeyPad[$i] === "P" || $phoneKeyPad[$i] === "Q" || $phoneKeyPad[$i] === "R" || $phoneKeyPad[$i] === "S") {
        echo 7;
    } else if ($phoneKeyPad[$i] === "T" || $phoneKeyPad[$i] === "U" || $phoneKeyPad[$i] === "V") {
        echo 8;
    } else if ($phoneKeyPad[$i] === "W" || $phoneKeyPad[$i] === "X" || $phoneKeyPad[$i] === "Y" || $phoneKeyPad[$i] === "Z") {
        echo 9;
    }
}