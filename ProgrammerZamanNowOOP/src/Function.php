<?php
include_once 'data/Person.php';

$person = new Person();
$person->name = "Yusril Arzaqi";
$person->address = "Semarang";
$person->country = "Indonesia";

$person1 = new Person();
$person1->name = "Bimo Alamsyah";
$person1->address = "Semarang";
$person1->country = "Indonesia";

$person->sayHello($person1->name);
$person1->sayHello(null);

$person->info();
$person1->info();
?>
