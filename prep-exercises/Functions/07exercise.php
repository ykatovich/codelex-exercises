<?php

$customer = new stdClass();
$customer->name = "Mark";
$customer->license = "B";
$customer->cash = 580;

$beretta = new stdClass();
$beretta->name = "USP";
$beretta->license = "A";
$beretta->price = 250;

$ak47 = new stdClass();
$ak47->name = "AK47";
$ak47->license = "B";
$ak47->price = 550;

$usp = new stdClass();
$usp->name = "Beretta";
$usp->license = "C";
$usp->price = 600;

$weapons = [
    $beretta,
    $ak47,
    $usp
];

$licenses = array_column($weapons, "license");
$prices = array_column($weapons, "price");
$names = array_column($weapons, "name");

for ($i = 0; $i < count($licenses); $i++) {
    if ($customer->license === $licenses[$i] && $customer->cash >= $prices[$i]) {
        echo "{$customer->name} can buy ({$names[$i]}) {$licenses[$i]} licenses weapon";
    }
}