<?php
$array = [
  "firstName" => "Yusril",
  "lastName" => "Arzaqi"
];

$object = (object)$array;

var_dump($object);

echo $object->firstName . PHP_EOL;
echo $object->lastName . PHP_EOL;

$arrayLagi = (array)$object;
var_dump($arrayLagi);

require_once 'data/Person.php';

$person = new Person("Yusril", "Semarang");
var_dump($person);

$arrayPerson = (array)$person;
var_dump($arrayPerson);
?>

