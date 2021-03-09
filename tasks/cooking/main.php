<?php

require_once 'Ingredient.php';
require_once 'Recipe.php';
require_once 'RecipeCollection.php';

$recipes = new RecipeCollection();

$recipes->addRecipe(new Recipe("Salad X", ["onion", "mayonnaise", "chicken"]));
$recipes->addRecipe(new Recipe("Bouillabaisse", ["fish", "tomato", "wine", "oil"]));
$recipes->addRecipe(new Recipe("Ratatouille", ["paprika", "eggplant", "zucchini"]));
$ingredients = new Ingredient();

$ingredientsNumber = readline("Input a number of ingredients: ");
while ($ingredientsNumber != 0) {
    $ingredient = readline("Input an ingredient: ");
    $ingredients->addIngredient($ingredient);
    $ingredientsNumber--;
}

echo PHP_EOL;

foreach ($recipes->getRecipes() as $recipeNames) {
    foreach ($recipeNames->getRecipeIngredients() as $value) {
        if (in_array($value, $ingredients->getIngredients())) {
            echo $value . " for " . $recipeNames->getRecipeName() . PHP_EOL;
        }
    }
}
echo PHP_EOL;

foreach ($recipes->getRecipes() as $recipeNames) {
    echo "For '" . $recipeNames->getRecipeName() . "' need ";
    foreach ($recipeNames->getRecipeIngredients() as $value) {
        if (!in_array($value, $ingredients->getIngredients())) {
            echo $value . " ";
        }
    }
    echo PHP_EOL;
}