<?php

class Flower
{
    private string $name;
    private int $amount;
    private int $price;

    public function __construct(string $name, int $amount, int $price)
    {
        $this->name = $name;
        $this->amount = $amount;
        $this->price = $price;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAmount(): string
    {
        return $this->amount;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function discountForWomen(): int
    {
        $discount = ($this->price * 20) / 100;
        return ($this->price - $discount);
    }

    public function decreaseAmount(int $amount): int
    {
        return $this->amount - $amount;
    }
}