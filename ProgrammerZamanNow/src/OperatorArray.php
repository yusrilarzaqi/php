<?php
$first = [
  "first_name" => "Yusril"
];

$last = [
  "last_name" => "Arzaqi"
];

$full = $first + $last;

/* var_dump($full); */

$a = [
  "first_name" => "Yusril",
  "last_name" => "Arzaqi"
];

$b = [
  "last_name" => "Arzaqi",
  "first_name" => "Yusril"
];

var_dump($a == $b);
var_dump($a === $b);

?>

