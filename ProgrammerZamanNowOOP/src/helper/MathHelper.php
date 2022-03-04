<?php

namespace Helper;

class MathHelper {
  static public string $name = "Math Helper";

  static public function sum(int ...$numbers): int {
    $result = 0;
    foreach ($numbers as $number) {
      $result += $number;
    }
    return $result;
  }
}
?>
