<?php
require_once 'data/Animal.php';

use Data\{Animal, Cat, Dog};

$cat = new Cat();
$cat->name = "Bundel";
$cat->run();

$dog = new Dog();
$dog->name = "Kuro";
$dog->run();
?>
