<?php

$counterX = 0;
$counterO = 0;

$displayBoard = [
    ['-', '-', '-'],
    ['-', '-', '-'],
    ['-', '-', '-']
];


while (true) {
    system('clear');

    $tie = true;
    foreach ($displayBoard as $line) {
        foreach ($line as $cell) {
            if ($cell === "-") {
                $tie = false;
            }
            echo $cell . " ";
        }
        echo PHP_EOL;
    }

    if ($counterX > $counterO) {
        $whoseMove = "O";
    } else {
        $whoseMove = "X";
    }


    if ($displayBoard[0][0] === $displayBoard[0][1]
        && $displayBoard[0][1] === $displayBoard[0][2]
        && $displayBoard[0][0] !== "-") {
        echo $displayBoard[0][0] . " is winner!";
        exit();
    }
    if ($displayBoard[1][0] === $displayBoard[1][1]
        && $displayBoard[1][1] === $displayBoard[1][2]
        && $displayBoard[1][0] !== "-") {
        echo $displayBoard[1][0] . " is winner!";
        exit();
    }
    if ($displayBoard[2][0] === $displayBoard[2][1]
        && $displayBoard[2][1] === $displayBoard[2][2]
        && $displayBoard[2][0] !== "-") {
        echo $displayBoard[2][0] . " is winner!";
        exit();
    }

    if ($displayBoard[0][0] === $displayBoard[1][0]
        && $displayBoard[1][0] === $displayBoard[2][0]
        && $displayBoard[0][0] !== "-") {
        echo $displayBoard[0][0] . " is winner!";
        exit();
    }
    if ($displayBoard[0][1] === $displayBoard[1][1]
        && $displayBoard[1][1] === $displayBoard[2][1]
        && $displayBoard[0][1] !== "-") {
        echo $displayBoard[0][1] . " is winner!";
        exit();
    }
    if ($displayBoard[0][2] === $displayBoard[1][2]
        && $displayBoard[1][2] === $displayBoard[2][2]
        && $displayBoard[0][2] !== "-") {
        echo $displayBoard[0][2] . " is winner!";
        exit();
    }

    if ($displayBoard[0][0] === $displayBoard[1][1]
        && $displayBoard[1][1] === $displayBoard[2][2]
        && $displayBoard[0][0] !== "-") {
        echo $displayBoard[0][0] . " is winner!";
        exit();
    }
    if ($displayBoard[0][2] === $displayBoard[1][1]
        && $displayBoard[1][1] === $displayBoard[2][0]
        && $displayBoard[0][2] !== "-") {
        echo $displayBoard[0][2] . " is winner!";
        exit();
    }
    if ($tie === true) {
        echo "Tie";
        exit();
    }

    $coordinates = readline($whoseMove . " choose your location (row, column): ");
    $x = intval(explode(" ", $coordinates)[0]);
    $y = intval(explode(" ", $coordinates)[1]);


    if ($displayBoard[$x][$y] === "-" && $whoseMove === "X") {
        $displayBoard[$x][$y] = $whoseMove;
        $counterX++;
    } else if ($displayBoard[$x][$y] === "-" && $whoseMove === "O") {
        $displayBoard[$x][$y] = $whoseMove;
        $counterO++;
    }
}
