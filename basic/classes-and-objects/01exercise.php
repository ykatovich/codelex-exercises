<?php

class Product
{

    private float $priceAtStart;
    private int $amountAtStart;
    private string $name;

    public function __construct(string $name, float $priceAtStart, int $amountAtStart)
    {
        $this->name = $name;
        $this->priceAtStart = $priceAtStart;
        $this->amountAtStart = $amountAtStart;
    }

    public function printProduct(): string
    {
        return "$this->name, $this->priceAtStart" . " EUR, " . "$this->amountAtStart" . PHP_EOL;
    }

    public function changeQuantity(int $amountAtStart): void
    {
        $this->amountAtStart = $amountAtStart;
    }

    public function changePrice(float $priceAtStart): void
    {
        $this->priceAtStart = $priceAtStart;
    }



}

$logitechMouse = new Product("Logitech Mouse", 70.00, 14);
$iphone5s = new Product("iPhone 5s", 999.99, 3);
$epson = new Product("Epson EB-U05", 440.46, 1);

echo $logitechMouse->printProduct();
echo $iphone5s->printProduct();
echo $epson->printProduct();

$logitechMouse->changePrice(50.00);
$iphone5s->changeQuantity(1);
$epson->changePrice(235.56);

echo $logitechMouse->printProduct();
echo $iphone5s->printProduct();
echo $epson->printProduct();