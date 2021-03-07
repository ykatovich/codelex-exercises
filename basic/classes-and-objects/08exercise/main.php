<?php
require_once 'SavingsAccount.php';

$money = readline("How much money is in the account?: ");
$annualInterest = readline("Enter the annual interest rate: ");
$period = readline("For how long has the account been open: ");

$acc = new SavingsAccount($money);
$acc->setAnnualInterestRate($annualInterest);

for ($i = 1; $i <= $period; $i++) {
    $depositForMonth = readline("Enter amount deposited for month $i: ");
    $withdrawalForMonth = readline("Enter amount withdrawn for $i: ");
    $acc->deposit($depositForMonth);
    $acc->withdrawal($withdrawalForMonth);
    $acc->addInterestRatePerMonth();
}


echo 'Total deposited: $' . number_format($acc->getTotalDeposited(), 2) . PHP_EOL;
echo 'Total withdrawn: $' . number_format($acc->getTotalWithdrawn(), 2) . PHP_EOL;
echo 'Interest earned: $' . number_format($acc->getTotalInterest(), 2) . PHP_EOL;
echo 'Ending balance: $' . number_format($acc->getBalance(), 2) . PHP_EOL;