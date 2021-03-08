<?php

require_once 'Ingredient.php';
require_once 'Recipe.php';
require_once 'RecipeCollection.php';

$recipes = new RecipeCollection();

$recipes->addRecipe(new Recipe("Salad X", ["onion", "mayonnaise", "chicken"]));
$recipes->addRecipe(new Recipe("Bouillabaisse", ["fish", "tomato", "wine", "oil"]));
$recipes->addRecipe(new Recipe("Ratatouille", ["paprika", "eggplant", "zucchini"]));

$ingredients = new Ingredient();
$ingredients->addIngredient();
echo PHP_EOL;
$recipes->canCook($ingredients);
echo PHP_EOL;
$recipes->ingredientsNeed($ingredients);