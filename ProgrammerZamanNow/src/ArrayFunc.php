<?php
$data = [
  1, 2, 3, 4, 5, 6, 7, 8, 9, 10
];

$mapFunc = fn(int $val) => $val * 10;


/* var_dump(array_map(fn($data) => $data * 2, $data)); */

/* var_dump(array_map($mapFunc, $data)); */


/* rsort($data); */
/* var_dump($data); */

/* var_dump(array_keys($data)); */

/* var_dump(array_values($data)); */

$person = [
  "first name" => "Yusril",
  "last name" => "Arzaqi"
];

foreach (array_values($person) as $name) {
  echo $name . PHP_EOL;
}
?>

