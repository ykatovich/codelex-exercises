<?php

$firstWord = readline("Enter first word:");
$secondWord = readline("Enter second word:");
$separate = 30 - (strlen($firstWord) + strlen($secondWord));

echo $firstWord;
for ($i = 0; $i < $separate; $i++) {
    echo ".";
}
echo $secondWord;