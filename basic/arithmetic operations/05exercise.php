<?php

$mysticalNumber = rand(1, 100);

$personChoice = readline("I'm thinking of a number between 1-100.  Try to guess it.");

if ($personChoice > $mysticalNumber) {
    echo "Sorry, you are too high.  I was thinking of $mysticalNumber" . PHP_EOL;
} else if ($personChoice < $mysticalNumber) {
    echo "Sorry, you are too low.  I was thinking of $mysticalNumber";
} else {
    echo "You guessed it! What are the odds?!";
}