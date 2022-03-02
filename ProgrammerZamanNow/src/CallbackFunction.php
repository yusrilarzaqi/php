<?php
function sayHello(string $name, callable $filter) {
  /* $result = call_user_func($filter, $name); */
  $result = $filter($name);
  echo "Hello $result" . PHP_EOL;
}

sayHello("Yusril",function($name) {
  return strtoupper($name); 
});

sayHello("Yusril", fn($name) => strtoupper($name));

sayHello("Yusril", "strtoupper");
?>

