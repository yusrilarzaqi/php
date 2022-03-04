<?php 
require 'data/Person.php';

$yusril = new Person("Yusril", "Semarang");
$yusril->country = "Indonewsia";

$yusril->sayHello("Bimo");
$yusril->sayHello(null);

?>
