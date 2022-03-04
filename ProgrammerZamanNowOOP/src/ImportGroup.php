<?php
require_once  "data/Conflict.php";
require_once  "data/Helper.php";

use Data\One\{Conflict, Sample, Dummy};
use function Helper\{helpMe as help};
use const Helper\{APPLICATION as APP};


$conflict = new Conflict();
$dummy = new Dummy();
$sample = new Sample();

help();
echo APP . PHP_EOL;


?>
