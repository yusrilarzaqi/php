<?php
require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Yusril";
$manager->sayHello("Bimo");

$vp = new VicePresident();
$vp->name = "Bimo";
$vp->sayHello("Yusril");
?>
