<?php

class Ingredient
{

    private array $ingredients = [];

    public function addIngredient(string $ingredient): void
    {
        array_push($this->ingredients, $ingredient);
    }

    public function getIngredients(): array
    {
        return $this->ingredients;
    }
}