<?php
trait A {
  function doA() {
    echo "a" . PHP_EOL;
  }

  function doB() {
    echo "b" . PHP_EOL;
  }
}

trait B {
  function doA() {
    echo "a" . PHP_EOL;
  }

  function doB() {
    echo "b" . PHP_EOL;
  }
}

class Sample {
  use A, B;
}

$sample = new Sample();
$sample->doA();
$sample->doB();
?>
