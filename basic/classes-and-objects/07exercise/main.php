<?php

require_once 'Dog.php';
require_once 'DogCollection.php';

$dogs = new DogCollection();

$dogs->addDog($sparky = new Dog("Sparky", "male", null, null));
$dogs->addDog($sam = new Dog("Sam", "male", null, null));
$dogs->addDog($lady = new Dog("Lady", "female", null, null));
$dogs->addDog($molly = new Dog("Molly", "female", null, null));
$dogs->addDog($buster = new Dog("Buster", "male", $lady, $sparky));
$dogs->addDog($coco = new Dog("Coco", "female", $molly, $buster));
$dogs->addDog($rocky = new Dog("Rocky", "male", $molly, $sam));
$dogs->addDog($max = new Dog("Max", "male", $lady, $rocky));

echo $coco->getFathersName() . PHP_EOL;
echo $sparky->getFathersName() . PHP_EOL;

echo $coco->hasSameMotherAs($rocky);