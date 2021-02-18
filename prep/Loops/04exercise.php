<?php

$numberArr = [9,
    15,
    22,
    42,
    65,
    99];

for($i = 0; $i < count($numberArr); $i++){
    if($numberArr[$i] % 3 == 0){
       echo $numberArr[$i].PHP_EOL;
    }
}
