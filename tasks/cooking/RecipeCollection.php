<?php

class RecipeCollection
{
    private array $recipes = [];

    public function addRecipe(Recipe $recipe)
    {
        $this->recipes[] = $recipe;
    }


    public function canCook(Ingredient $ingredients): void
    {
        $ingredientsWhatIHave = null;
        foreach ($this->recipes as $recipe) {
            $ingredientsWhatIHave = array_intersect($recipe->getRecipeIngredients(), $ingredients->getIngredients());
            foreach ($ingredientsWhatIHave as $ingredient) {
                if (in_array($ingredient, $recipe->getRecipeIngredients())) {
                    echo $ingredient . ' - for ' . $recipe->getRecipeName() . PHP_EOL;
                }
            }
        }
    }


    public function ingredientsNeed(Ingredient $ingredients): void
    {
        foreach ($this->recipes as $recipe) {
            $missingIngredients = array_diff($recipe->getRecipeIngredients(), $ingredients->getIngredients());
            echo "For " . $recipe->getRecipeName() . ' need: ';
            foreach ($missingIngredients as $missingIngredient) {
                echo $missingIngredient . ' ';
            }
            echo PHP_EOL;
        }
    }


}
