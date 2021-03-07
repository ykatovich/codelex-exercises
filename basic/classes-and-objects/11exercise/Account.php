<?php

class Account
{
    private string $accountName;
    private float $accountBalance;

    public function __construct(string $name, float $balance)
    {
        $this->accountName = $name;
        $this->accountBalance = $balance;
    }

    public function getAccountBalance(): string
    {
        return number_format($this->accountBalance, 2);
    }

    public function deposit(float $amount): void
    {
        $this->accountBalance += $amount;
    }

    public function withdrawal(float $amount): void
    {
        $this->accountBalance -= $amount;
    }


}
