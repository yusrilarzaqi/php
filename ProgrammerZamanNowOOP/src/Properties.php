<?php
require_once "data/Person.php";

$person = new Person();
$person->name = "Yusril Arzaqi";
$person->address = "Semarang";

echo "Name    : {$person->name}" . PHP_EOL;
echo "Address : {$person->address}" . PHP_EOL;
echo "Country : {$person->country}" . PHP_EOL;

echo PHP_EOL . PHP_EOL;
$person1 = new Person();
$person1->name = null;
$person1->address = null;
$person1->country = "Indonesia";

echo "Name    : {$person1->name}" . PHP_EOL;
echo "Address : {$person1->address}" . PHP_EOL;
echo "Country : {$person1->country}" . PHP_EOL;

?>

