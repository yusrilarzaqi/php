<?php
/* function sum(int $a, int $b) { */
/*   return $a + $b; */
/* } */

/* $total = sum(10, 10); */
/* var_dump($total); */

/* $total = sum(20, 20); */
/* var_dump($total); */

function getFinalValue(int $value):string {
  if ($value >= 80) {
    return "A";
  } else if ($value >= 70) {
    return "B";
  } else if ($value >= 60) {
    return "C";
  } else if ($value >= 50) {
    return "D";
  } else {
    return "E";
  }

  echo "Ups" . PHP_EOL;
}

$score = getFinalValue(89);
var_dump($score);
?>
