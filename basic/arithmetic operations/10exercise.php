<?php

class Geometry
{
    public static function areaOfTheCircle(float $radius): float
    {
        if ($radius < 0) {
            echo "Error. Radius cannot be negative value";
            exit;
        }
        return M_PI * $radius ** 2;
    }

    public static function areaOfTheRectangle(float $length, float $width): float
    {
        if ($length < 0 || $width < 0) {
            echo "Error. Length or width cannot be negative value";
            exit;
        }
        return $length * $width;
    }

    public static function areaOfTheTriangle(float $base, float $height): float
    {
        if ($base < 0 || $height < 0) {
            echo "Error. Base or height cannot be negative value";
            exit;
        }
        return $base * $height * 0.5;
    }
}

echo "Geometry calculator:" . PHP_EOL . PHP_EOL .
    "1.Calculate the Area of a Circle" . PHP_EOL .
    "2.Calculate the Area of a Rectangle" . PHP_EOL .
    "3.Calculate the Area of a Triangle" . PHP_EOL .
    "4.Quit" . PHP_EOL;

$personChoice = readline("Enter your choice (1-4) : ");

if (intval($personChoice) === 1) {
    $radius = readline("Enter a radius : ") . PHP_EOL;
    echo round(Geometry::areaOfTheCircle(floatval($radius)), 2);
} else if (intval($personChoice) === 2) {
    $length = readline("Enter a length : ") . PHP_EOL;
    $width = readline("Enter a width : ") . PHP_EOL;
    echo round(Geometry::areaOfTheRectangle(floatval($length), floatval($width)), 2);
} else if (intval($personChoice) === 3) {
    $base = readline("Enter a base : ") . PHP_EOL;
    $height = readline("Enter a height : ") . PHP_EOL;
    echo round(Geometry::areaOfTheTriangle(floatval($base), floatval($height)), 2);
} else if (intval($personChoice) === 4) {
    exit("bye");
} else if (intval($personChoice) < 1 || intval($personChoice) > 4) {
    echo "Error.";
}