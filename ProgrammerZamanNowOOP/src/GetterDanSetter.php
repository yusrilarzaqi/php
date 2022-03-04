<?php
require_once 'data/Category.php';

$buku = new Category();
$buku->setName("Buku Tulis");
$buku->setExpensive(false);


$buku->setName("                         ");
echo "Nama : {$buku->getName()}" . PHP_EOL;
echo "Expensive : {$buku->isExpensive()}" . PHP_EOL;
?>
