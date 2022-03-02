<?php
/* $sayHello = function (string $name) { */
/*   echo "Hello $name" . PHP_EOL; */
/* }; */

/* $sayHello("Yusril"); */
/* $sayHello("Bimo"); */

function sayHello(string $name, $filter) {
  $finalName = $filter($name);
  echo "Hello $finalName" . PHP_EOL;
}

/* sayHello("Yusril", function(string $name) { */
/*   return strtoupper($name); */
/* }); */

$filterFunc = function(string $name): string {
  return strtoupper($name);
};

sayHello("Yusril", $filterFunc);

?>

