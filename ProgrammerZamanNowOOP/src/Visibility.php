<?php
require_once "data/Product.php";

use Data\{Product, ProductDummy};

$product = new Product("sepatu", 200_000);
$productDummy = new ProductDummy("sandal", 15000);

var_dump($product->getName());
$productDummy->info();
?>
