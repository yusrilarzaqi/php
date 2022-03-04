<?php
require_once 'helper/MathHelper.php';

use Helper\{MathHelper};

echo MathHelper::$name . PHP_EOL;
$total = MathHelper::sum(10, 20, 30, 40);
echo "Total $total" . PHP_EOL;


?>
