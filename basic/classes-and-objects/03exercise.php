<?php

class FuelGauge
{

    private int $amountOfFuel = 0;

    public function getAmountOfFuel(): int
    {
        return $this->amountOfFuel;
    }

    public function incrementTheAmountOfFuel()
    {
        if ($this->amountOfFuel <= 70) {
            $this->amountOfFuel++;
        }
    }

    public function decrementTheAmountOfFuel()
    {
        if ($this->amountOfFuel !== 0) {
            $this->amountOfFuel--;
        }
    }
}

class Odometer
{
    private float $currentMileage = 0;

    public function getCurrentMileage(): float
    {
        return $this->currentMileage;
    }

    public function incrementTheCurrentMileage(FuelGauge $fuelGauge): void
    {
        if ($this->currentMileage === 999.999) {
            $this->currentMileage = 0;
        } else if ($this->currentMileage < 999.999) {
            $this->currentMileage++;
        }
        if ($this->currentMileage % 10 === 0) {
            $fuelGauge->decrementTheAmountOfFuel();
        }
    }
}

$volvoFuelGauge = new FuelGauge();
$volvoMileage = new Odometer();

while ($volvoFuelGauge->getAmountOfFuel() !== 70) {
    $volvoFuelGauge->incrementTheAmountOfFuel();
}

echo "The car is refueled. The tank has " . $volvoFuelGauge->getAmountOfFuel() . " liters." . PHP_EOL;

while ($volvoFuelGauge->getAmountOfFuel() !== 0) {
    $volvoMileage->incrementTheCurrentMileage($volvoFuelGauge);
    echo "Mileage : " . $volvoMileage->getCurrentMileage() . PHP_EOL;
    echo "Amount of fuel : " . $volvoFuelGauge->getAmountOfFuel() . PHP_EOL;
}