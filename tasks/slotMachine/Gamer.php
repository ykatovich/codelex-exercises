<?php

class Gamer
{
    private int $money;
    private int $bid;
    private int $spin;


    public function getMoney(): int
    {
        return $this->money;
    }

    public function setMoney($money): void
    {
        $this->money = $money;
    }

    public function getBid(): int
    {
        return $this->bid;
    }

    public function setBid($bid): void
    {
        $this->bid = $bid;
    }

    public function increaseMoney($moneyWon): void
    {
        $this->money += $moneyWon;
    }

    public function decreaseMoney($moneyWon): void
    {
        $this->money -= $moneyWon;
    }

    public function setTheNumberOfSpins($spin): void
    {
        $this->spin = $spin;
    }

    public function getTheNumberOfSpins(): int
    {
        return $this->spin;
    }

    public function decreaseTheNumberOfSpins(): void
    {
        $this->spin--;
    }

    public function increaseTheNumberOfSpins(): void
    {
        $this->spin += 5;
    }
}