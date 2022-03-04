<?php
require_once 'data/SayGoodBye.php';

use Data\Traits\{Person, SayGoodBye, SayHello, CanRun};

$person = new Person();
$person->hello("Bimo");
$person->goodBye("Bimo");

$person->name = "Yusril";
/* var_dump($person); */

$person->run();

?>
