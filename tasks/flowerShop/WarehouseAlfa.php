<?php
require_once 'FlowersInterface.php';

class WarehouseAlfa implements FlowersInterface
{
    private array $warehouseFlowers;

    public function addFlower(Flower $flower)
    {
        $this->warehouseFlowers[] = $flower;
    }

    public function addFlowersToAlfaArray(array $warehouseFlowers): void
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