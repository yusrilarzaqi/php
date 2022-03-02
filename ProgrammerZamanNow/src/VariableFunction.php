<?php
/* function foo() { */
/*   echo "FOO" . PHP_EOL; */
/* } */

/* function bar() { */
/*   echo "BAR" . PHP_EOL; */
/* } */

/* $functionName = "foo"; */
/* $functionName(); */

/* $functionName = "bar"; */
/* $functionName(); */

function sayHello(string $name, $filter) {
  $finalName = $filter($name);
  echo "Hello $finalName" . PHP_EOL;
}

function sampleFunction(string $name) : string {
  return "Sample $name";
}

sayHello("Yusril", "strtoupper");
sayHello("Yusril", "strtolower");
sayHello("Yusril", "sampleFunction");

?>

