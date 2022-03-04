<?php
require_once 'data/Student.php';

$student1 = new Student();
$student1->name = "Yusril";
$student1->id = "185512";
$student1->ipk = 4;

$student1("Bimo",  "Dimas");

?>
