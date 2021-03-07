<?php
require_once 'Account.php';
require_once 'Transfer.php';

$bartosAccount = new Account("Barto's account", 100.00);

echo "Initial state: ";
echo $bartosAccount->getAccountBalance() . PHP_EOL;
$bartosAccount->withdrawal(20);
echo "Barto's account balance is now: " . $bartosAccount->getAccountBalance() . PHP_EOL;

echo "-------First money transfer-------" . PHP_EOL;

$mattsAccount = new Account("Matt's account", 1000);
$myAccount = new Account("My Account", 0);
$mattsAccount->withdrawal(100);
$myAccount->deposit(100);
echo "Matt's account balance is now: " . $mattsAccount->getAccountBalance() . PHP_EOL;
echo "My account balance is now: " . $myAccount->getAccountBalance() . PHP_EOL;

echo "-------Money transfer function-------" . PHP_EOL;

$aAccount = new Account("A account", 100);
$bAccount = new Account("B account", 0);
$cAccount = new Account("C account", 0);

$bank = new Transfer();

$bank->transferFromTo($aAccount, $bAccount, 50);
$bank->transferFromTo($bAccount, $cAccount, 25);

echo "A account balance is now: " . $aAccount->getAccountBalance() . PHP_EOL;
echo "B account balance is now: " . $bAccount->getAccountBalance() . PHP_EOL;
echo "C account balance is now: " . $cAccount->getAccountBalance() . PHP_EOL;

