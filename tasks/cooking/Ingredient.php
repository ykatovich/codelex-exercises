<?php

class Ingredient
{

    private array $ingredients = [];

    public function addIngredient(): void
    {
        $ingredientsNumber = readline("Input a number of ingredients: ");
        while ($ingredientsNumber != 0) {
            array_push($this->ingredients, readline("Input ingredient: "));
            $ingredientsNumber--;
        }
    }

    public function getIngredients(): array
    {
        return $this->ingredients;
    }
}