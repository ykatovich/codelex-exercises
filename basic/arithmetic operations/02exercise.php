<?php

function checkOddEven(int $intNumber): string
{
    if ($intNumber % 2 === 0){
        return "Even Number";
    }
    return "Odd Number";
}

echo checkOddEven(128).PHP_EOL;
exit("bye");
