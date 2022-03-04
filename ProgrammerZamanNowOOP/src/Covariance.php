<?php

use Data\{AnimalFood, Cat, CatShelter, DogShelter, Food};

require_once 'data/AnimalShelter.php';
require_once 'data/Animal.php';
require_once 'data/Food.php';

$catShelter = new CatShelter();
$cat = $catShelter->adopt("Bundel");
$cat->eat(new AnimalFood);

var_dump($cat);

$dogShelter = new DogShelter();
$dog = $dogShelter->adopt("Kuro");
$dog->eat(new Food);

var_dump($dog);


?>
