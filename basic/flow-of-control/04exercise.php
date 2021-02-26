<?php

$dayNumber = intval(readline("Enter a number (from 0 to 6): "));

switch ($dayNumber) {
    case 0:
    {
        echo "Monday";
        break;
    }
    case 1:
    {
        echo "Tuesday";
        break;
    }
    case 2:
    {
        echo "Wednesday";
        break;
    }
    case 3:
    {
        echo "Thursday";
        break;
    }
    case 4:
    {
        echo "Friday";
        break;
    }
    case 5:
    {
        echo "Saturday";
        break;
    }
    case 6:
    {
        echo "Sunday";
        break;
    }
    default :
        echo "Not a valid day";
}

echo PHP_EOL;

if ($dayNumber === 0) {
    echo "Monday";
} else if ($dayNumber === 1) {
    echo "Tuesday";
} else if ($dayNumber === 2) {
    echo "Wednesday";
} else if ($dayNumber === 3) {
    echo "Thursday";
} else if ($dayNumber === 4) {
    echo "Friday";
} else if ($dayNumber === 5) {
    echo "Saturday";
} else if ($dayNumber === 6) {
    echo "Sunday";
} else {
    echo "Not a valid day";
}