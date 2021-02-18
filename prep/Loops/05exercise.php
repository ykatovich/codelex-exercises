<?php

$person = [
    [
        "name" => "Jeff",
        "surname" => "Thomson",
        "age" => 40,
        "birthday" => "19-04-1981"
    ],
    [
        "name" => "Maya",
        "surname" => "Stevenson",
        "age" => 50,
        "birthday" => "25-01-1971"
    ],
    [
        "name" => "Tim",
        "surname" => "Pollen",
        "age" => 60,
        "birthday" => "10-12-1961"
    ]

];

for($i = 0; $i < count($person); $i++){
    echo $person[$i]["name"]." ".
        $person[$i]["surname"]." ".
        $person[$i]["age"]." ".
        $person[$i]["birthday"]."\n";

}