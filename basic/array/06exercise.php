<?php

$listOfWords = [
    "apple",
    "programme",
    "library",
    "cartoon",
    "school"
];

$numberOfLives = 7;
$missesLetters = [];
$mysticalWord = str_split($listOfWords[rand(0, 1)]);
$word = array_fill(0, count($mysticalWord), "_");


while (true) {
    system('clear');

    echo "You have " . $numberOfLives . PHP_EOL;
    echo "Word: ";
    foreach ($word as $value) {
        echo $value;
    }
    echo PHP_EOL;
    echo "Misses: ";
    foreach ($missesLetters as $value) {
        echo $value . " ";
    }
    echo PHP_EOL;
    echo "Guess: ";

    $letter = readline(" ");

    if (in_array($letter, $mysticalWord)) {
        foreach ($mysticalWord as $key => $value) {
            if ($letter === $value) {
                $word[$key] = $letter;
            }
        }
    } else if (!in_array($letter, $mysticalWord) && (!in_array($letter, $missesLetters))) {
        array_push($missesLetters, $letter);
        $numberOfLives--;
    }
    if ($numberOfLives === 0) {
        echo "You lose";
        exit();
    } else if ($mysticalWord === $word) {
        echo "You are winner";
        exit();
    }


}



