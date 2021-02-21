<?php

$validOptions = ["R", "P", "S"];
$userChoice = strtoupper(readline("Enter your choice R - rock, P - paper, S - scissors: "));

while (!in_array($userChoice, $validOptions)) {
    $userChoice = strtoupper(readline("Invalid option. You need to choice R - rock, P - paper, S - scissors: "));
}

$pcChoice = $validOptions[rand(0, 2)];

echo "PC choice is " . $pcChoice . " . Your choice is " . $userChoice . PHP_EOL;

if ($pcChoice === "R" && $userChoice === "S") {
    echo "PC is winner";
} else if ($pcChoice === "R" && $userChoice === "P") {
    echo "You are winner";
} else if ($pcChoice === "P" && $userChoice === "S") {
    echo "You are winner";
} else if ($pcChoice === "P" && $userChoice === "R") {
    echo "PC is winner";
} else if ($pcChoice === "S" && $userChoice === "P") {
    echo "PC are winner";
} else if ($pcChoice === "S" && $userChoice === "R") {
    echo "You are winner";
} else {
    echo "Tie";
}