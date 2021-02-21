<?php

$employeeMark = new stdClass();
$employeeMark->basePay = 7.5;
$employeeMark->hoursWorked = 35;

$employeeTomas = new stdClass();
$employeeTomas->basePay = 8.20;
$employeeTomas->hoursWorked = 47;

$employeeTina = new stdClass();
$employeeTina->basePay = 10.00;
$employeeTina->hoursWorked = 73;

$employees = [
    $employeeMark,
    $employeeTomas,
    $employeeTina
];

function earnings(float $basePay, int $hoursWorked): string
{
    $payForOvertime = 0;
    if ($hoursWorked <= 60 && $basePay >= 8.00) {
        if ($hoursWorked > 40) {
            $overtime = $hoursWorked - 40;
            $payForOvertime = ($basePay * 1.5) * $overtime;
        }
        return ((40 * $basePay) + $payForOvertime) . PHP_EOL;

    } else if ($hoursWorked > 60) {
        return "Error. An employee can't work more than 60 hours in a week." . PHP_EOL;
    } else if ($basePay < 8.00) {
        return "Error. The base pay must not be less than the minimum wage." . PHP_EOL;
    }
}


function salaryOfEmployee($employees): void
{
    foreach ($employees as $employee) {
        echo earnings($employee->basePay, $employee->hoursWorked);
    }
}

salaryOfEmployee($employees);
