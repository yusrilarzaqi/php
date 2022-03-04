<?php
function getGanjil(int $max): Iterator {

  $array = [];

  for ($i = 1; $i < $max; $i++) {
    if ($i % 2 == 1) {
      $array[] = $i;
    }
  }

  return new ArrayIterator($array);
}

function getGenap(int $max): Iterator {
  for ($i = 1; $i <= $max; $i++) {
    if ($i % 2 == 0) {
      yield $i;
    }
  }
}

/* $ganjil = getGanjil(100); */
/* foreach($ganjil as $val) { */
/*   echo "Ganjil ke-$val" . PHP_EOL; */
/* } */

/* foreach($genap as $val) { */
/*   echo "Genap : $val" . PHP_EOL; */
/* } */

var_dump(getGenap(100));


?>

