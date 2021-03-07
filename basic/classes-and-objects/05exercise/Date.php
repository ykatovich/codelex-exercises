<?php

class Date
{
    private int $month;
    private int $day;
    private int $year;

    public function __construct(int $month = 1, int $day = 1, int $year = 2021)
    {
        $this->month = $month;
        $this->day = $day;
        $this->year = $year;
    }

    public function setMonth(): void
    {
        $this->month = readline("Enter a month: ");
        while ($this->month > 12 || $this->month < 1)
            $this->month = readline("Error. Enter a month: ");
    }

    public function getMonth(): int
    {
        return $this->month;
    }

    public function setDay(): void
    {
        switch ($this->getMonth()) {
            case 1:
                $this->day = readline("Month is January. Enter a day: ");
                while ($this->getDay() > 31 || $this->getDay() < 1) {
                    $this->day = readline("Error.Month is January. Enter a day: ");
                }
                break;
            case 2:
                if ($this->getYear() % 4 === 0
                    && $this->getYear() % 100 === 0
                    && $this->getYear() % 400 === 0) {
                    $this->day = readline("Month is February(Leap year. total 29 days). Enter a day: ");
                } else {
                    $this->day = readline("Month is February total 28 days. Enter a day: ");
                }
                break;
            case 3:
                $this->day = readline("Month is March. Enter a day: ");
                while ($this->getDay() > 31 || $this->getDay() < 1) {
                    $this->day = readline("Error.Month is March. Enter a day: ");
                }
                break;
            case 4:
                $this->day = readline("Month is April. Enter a day: ");
                while ($this->getDay() > 30 || $this->getDay() < 1) {
                    $this->day = readline("Error.Month is April. Enter a day: ");
                }
                break;
            case 5:
                $this->day = readline("Month is May. Enter a day: ");
                while ($this->getDay() > 31 || $this->getDay() < 1) {
                    $this->day = readline("Error.Month is May. Enter a day: ");
                }
                break;
            case 6:
                $this->day = readline("Month is June. Enter a day: ");
                while ($this->getDay() > 30 || $this->getDay() < 1) {
                    $this->day = readline("Error.Month is June. Enter a day: ");
                }
                break;
            case 7:
                $this->day = readline("Month is July. Enter a day: ");
                while ($this->getDay() > 31 || $this->getDay() < 1) {
                    $this->day = readline("Error.Month is July. Enter a day: ");
                }
                break;
            case 8:
                $this->day = readline("Month is August. Enter a day: ");
                while ($this->getDay() > 31 || $this->getDay() < 1) {
                    $this->day = readline("Error.Month is January. Enter a day: ");
                }
                break;
            case 9:
                $this->day = readline("Month is September. Enter a day: ");
                while ($this->getDay() > 30 || $this->getDay() < 1) {
                    $this->day = readline("Error.Month is September. Enter a day: ");
                }
                break;
            case 10:
                $this->day = readline("Month is October. Enter a day: ");
                while ($this->getDay() > 31 || $this->getDay() < 1) {
                    $this->day = readline("Error.Month is October. Enter a day: ");
                }
                break;
            case 11:
                $this->day = readline("Month is November. Enter a day: ");
                while ($this->getDay() > 30 || $this->getDay() < 1) {
                    $this->day = readline("Error.Month is November. Enter a day: ");
                }
                break;
            case 12:
                $this->day = readline("Month is December. Enter a day: ");
                while ($this->getDay() > 31 || $this->getDay() < 1) {
                    $this->day = readline("Error.Month is December. Enter a day: ");
                }
                break;

        }
    }

    public
    function getDay(): int
    {
        return $this->day;
    }

    public
    function setYear(): void
    {
        $this->year = readline("Enter a year: ");
        while ($this->year < 1) {
            $this->year = readline("Error. Enter a year: ");
        }
    }

    public
    function getYear(): int
    {
        return $this->year;
    }

    public
    function displayDate(): string
    {
        return $this->getMonth() . '/' . $this->getDay() . '/' . $this->getYear();
    }
}
