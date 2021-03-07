<?php

class SavingsAccount
{
    private int $annualInterestRate;
    private int $accBalance;
    private int $deposits = 0;
    private int $withdrawals = 0;
    private int $interestEarned = 0;

    public function __construct(int $accBalance)
    {
        $this->accBalance = $accBalance;
    }

    public function getBalance(): int
    {
        return $this->accBalance;
    }

    public function setAnnualInterestRate(int $amount): void
    {
        $this->annualInterestRate = $amount;
    }

    public function withdrawal(int $amount): void
    {
        $this->withdrawals += $amount;
        $this->accBalance -= $amount;
    }

    public function deposit(int $amount): void
    {
        $this->deposits += $amount;
        $this->accBalance += $amount;
    }

    public function addInterestRatePerMonth(): void
    {
        $interestRatePerMonth = ($this->annualInterestRate / 12) / 100;
        $this->interestEarned += ($interestRatePerMonth * $this->accBalance);
        $this->accBalance += $interestRatePerMonth * $this->accBalance;
    }

    public function getTotalDeposited(): int
    {
        return $this->deposits;
    }

    public function getTotalWithdrawn(): int
    {
        return $this->withdrawals;
    }

    public function getTotalInterest(): int
    {
        return $this->interestEarned;
    }
}

