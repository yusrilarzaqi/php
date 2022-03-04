<?php
namespace {
  require 'data/Conflict.php';
  require 'data/Helper.php';

  $conflict1 = new \Data\One\Conflict();
  $conflict2 = new \Data\Two\Conflict();

  /* var_dump($conflict1); */
  /* var_dump($conflict2); */

  echo Helper\APPLICATION . PHP_EOL;

  Helper\helpMe();
}
?>
