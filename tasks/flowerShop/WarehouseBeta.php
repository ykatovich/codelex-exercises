<?php

require_once 'FlowersInterface.php';

class WarehouseBeta implements FlowersInterface
{
    private array $warehouseFlowers;

    public function addFlower(Flower $flower)
    {
        $this->warehouseFlowers[] = $flower;
    }

    public function addFlowersToBetaArray(array $warehouseFlowers): void
    {
        foreach ($warehouseFlowers as $flower) {
            $this->addFlower($flower);
        }
    }

    public function getFlowersFromWarehouse(): array
    {
        return $this->warehouseFlowers;
    }
}