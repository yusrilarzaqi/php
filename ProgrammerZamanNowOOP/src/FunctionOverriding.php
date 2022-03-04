<?php

require_once 'data/Manager.php';

$yusril = new Manager("Yusril Arzaqi");

$bimo = new VicePresident("Bimo Alamsyah" );

$yusril->sayHello("Bimo A");
$bimo->sayHello("Yusril A");
?>
