<?php

$gender = "pria";

/* $hi = null; */

/* if ($gender ==  "pria") { */
/*   $hi = "Hi Bro!"; */
/* } else { */
/*   $hi = "Hi Sis!"; */
/* } */
$hi = $gender == "pria" ? "Hi bro!" : "Hi Sis!";

echo $hi . PHP_EOL;

?>
