<?php

class Recipe
{

    private string $recipeName;
    private array $recipesIngredients;

    public function __construct(string $recipeName, array $recipesIngredients)
    {
        $this->recipeName = $recipeName;
        $this->recipesIngredients = $recipesIngredients;
    }

    public function getRecipeName(): string
    {
        return $this->recipeName;
    }
    public function getRecipeIngredients(): array
    {
        return $this->recipesIngredients;
    }

}