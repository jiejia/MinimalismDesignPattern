<?php
namespace Builder;

require_once "../autoload.php";

$mealBuilder = new MealBuilder();

$vegMeal = $mealBuilder->prepareVegMeal();
echo "Veg Meal\n";
$vegMeal->showItems();
echo "Total Cost: " . $vegMeal->getCost();

$nonVegMeal = $mealBuilder->prepareNonVegMeal();
echo "\n\nNon-Veg Meal\n";
$vegMeal->showItems();
echo "Total Cost: " . $vegMeal->getCost();