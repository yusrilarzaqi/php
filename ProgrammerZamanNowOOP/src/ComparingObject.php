<?php

require_once 'data/Student.php';

$student1 = new Student();
$student1->name = "Yusril";
$student1->id = "185512";
$student1->ipk = 4;

$student2 = new Student();
$student2->name = "Yusril";
$student2->id = "185512";
$student2->ipk = 4;

var_dump($student1 == $student2);
var_dump($student2 === $student1);

?>


