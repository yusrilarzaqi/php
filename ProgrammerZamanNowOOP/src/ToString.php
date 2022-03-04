<?php
require_once 'data/Student.php';

$student = new Student();
$student->name = "Yusril";
$student->id = "185512";
$student->ipk = 4;

/* $student = (string) $student; */

echo $student . PHP_EOL;

?>
