<?php

class EnergyDrinkResearch
{
    private int $purchasedEnergyDrinks;
    private int $preferCitrusDrinks;
    private int $surveyedPeople;

    public function setPurchasedEnergyDrinks(int $amount): void
    {
        $this->purchasedEnergyDrinks = $amount;
    }

    public function getPurchasedEnergyDrinks(): int
    {
        return $this->purchasedEnergyDrinks;
    }

    public function setPreferCitrusDrinks(int $amount): void
    {
        $this->preferCitrusDrinks = $amount;
    }

    public function getPreferCitrusDrinks(): int
    {
        return $this->preferCitrusDrinks;
    }

    public function setSurveyedPeople(int $amount): void
    {
        $this->surveyedPeople = $amount;
    }

    public function getSurveyedPeople(): int
    {
        return $this->surveyedPeople;
    }

    function calculateEnergyDrinkers(int $numberSurveyed, int $purchasedEnergyDrinksPerWeek): int
    {
        return ($this->getSurveyedPeople() * $this->getPurchasedEnergyDrinks()) / 100;
    }

    function calculatePreferCitrus(): int
    {
        return ($this->calculateEnergyDrinkers($this->getSurveyedPeople(), $this->getPurchasedEnergyDrinks()) * $this->getPreferCitrusDrinks()) / 100;
    }

}