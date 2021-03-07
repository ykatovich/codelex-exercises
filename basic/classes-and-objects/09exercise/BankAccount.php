<?php

class BankAccount
{
    private string $accountsName;
    private string $balance;

    public function __construct(string $accountsName, string $balance)
    {
        $this->accountsName = $accountsName;
        $this->balance = $balance;
    }

    public function showUserNameAndBalance(): string
    {
        setlocale(LC_MONETARY, 'en_US.UTF-8');
        return $this->accountsName . ", " . money_format('%+n', $this->balance);

    }
}
