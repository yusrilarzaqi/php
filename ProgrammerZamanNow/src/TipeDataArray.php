<?php
/* $values = array(1, 2, 3, 4); */
/* var_dump($values); */

// Atau

/* $names = ["Yusril", "Arzaqi"]; */
/* var_dump($names); */

/* $name = ["Yusril", "Arzaqi"]; */
/* var_dump($name[0]); */

/* $name[0] = "Bimo"; */
/* var_dump($name); */

/* unset($name[1]); */
/* var_dump($name); */

/* $name[] = "Alamsyah"; */

/* var_dump($name); */
/* var_dump(count($name)); */

$yusril = array(
  "id" => "yusril",
  "name" => "Yusril Arzaqi",
  "age" => 18,
  "address" => array(
    "city" => "Semarang",
    "country" => "Indonesia"
  )
);

$bimo = [
  "id" => "bimo",
  "name" => "Bimo Alamsyah",
  "age" => 18,
  "address" => [
    "city" => "Semarang",
    "country" => "Indonesia"
  ]
];

var_dump($yusril["name"]);
var_dump($yusril["address"]["city"]);


?>

