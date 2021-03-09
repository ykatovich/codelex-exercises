<?php

class RecipeCollection
{
    private array $recipes = [];

    public function addRecipe(Recipe $recipe)
    {
        $this->recipes[] = $recipe;
    }

    public function getRecipes(): array
    {
        return $this->recipes;
    }
}
