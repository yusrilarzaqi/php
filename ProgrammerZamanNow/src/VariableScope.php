<?php
/* $global = "Global"; // global */

/* function foo() { */
/*   global $global; */
  
/*   echo $global; // error */

/*   var_dump($GLOBALS); */
/* } */

/* foo(); */

/* function bar() { */
/*   $foo = "bar"; //local scope */
/* } */

/* bar(); */
/* echo $bar; //error */


function increment() {
  static $counter = 1;
  echo "Counter : $counter" . PHP_EOL;

  $counter++;
}

increment();
increment();
increment();
increment();

?>


