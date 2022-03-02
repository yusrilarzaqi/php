<?php
/* $name = "Yusril"; */

/* $otherName = &$name; */
/* $otherName = "Bimo"; */

/* echo $name . PHP_EOL; */
/* echo $otherName . PHP_EOL; */

/* function increment(int &$value) { */
/*   $value++; */
/* } */

/* function sum(int &$a, int &$b): int { */
/*   return $a + $b; */
/* } */

/* $wasd = 10; */
/* $was = 100; */

/* $counter = 1; */
/* increment($counter); */
/* increment($counter); */
/* increment($counter); */
/* increment($counter); */
/* increment($counter); */

/* echo $counter . PHP_EOL; */
/* var_dump(sum($wasd, $was)); */

function &getValue(){
  static $value = 100;
  return $value;
}

$a = &getValue();
$a = 250;

$b = &getValue();
echo $b . PHP_EOL;

?>

