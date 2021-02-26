<?php

$number = readline("Enter a number: ");

if ($number > 0) {
    echo "$number is positive";
} else if ($number < 0) {
    echo "$number is negative";
} else {
    echo "$number is zero";
}