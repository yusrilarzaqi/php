<?php

require_once 'data/Student.php';

$student1 = new Student();
$student1->id = "185512";
$student1->name = "Yusril Arzaqi";
$student1->ipk = 4;
$student1->setSample("XXX");

$student2 = clone $student1;
$student2->setSample("YYY");

var_dump($student1);
var_dump($student2);

?>
