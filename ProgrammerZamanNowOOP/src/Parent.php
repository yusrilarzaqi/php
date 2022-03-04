<?php

require_once 'data/Shape.php';

use Data\{Shape, Rectangle};

$bentuk = new Shape();
echo $bentuk->getCorner() . PHP_EOL;

$persegi = new Rectangle();
echo $persegi->getCorner() . PHP_EOL;
echo $persegi->getParentCorner() . PHP_EOL;

?>
