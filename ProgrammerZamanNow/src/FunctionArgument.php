<?php
// function sayHello($name = "Anonymous") {
//   echo "Hello $name" . PHP_EOL;
// }

// sayHello("Yusril");
// sayHello("Bimo");
// sayHello();

// function sayHello($firstName, $lastName = "") {
//   echo "Hello $firstName $lastName" . PHP_EOL;
// }

// sayHello("Yusril");
// sayHello("Bimo", "Alamsyah");

// function sum(int $first, int $last) {
//   $total = $first + $last;
//   echo "Total $first + $last = $total" . PHP_EOL;
// }

// sum("100", "100");
// sum(100, 100);
// sum(true, false);
// sum([], []);

function sumAll(...$values) {
  $total = 0;
  foreach ($values as $value) {
    $total += $value;
  }

  echo "Total " . implode(" + ", $values) . " = $total" . PHP_EOL;
}

$values = [10, 20, 30 , 40];


sumAll(10, 20, 30, 40);
sumAll(...$values);
?>