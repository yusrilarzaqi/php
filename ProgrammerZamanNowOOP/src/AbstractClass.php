<?php
require_once "data/Location.php";

use Data\{Location, City, Province, Country};

// $location = new Location(); // Error
$city = new City();
$city->name = "Semarang";

$province = new Province();
$province->name = "Jawa Tengah";

$country = new Country();
$country->name = "Indenesia";

var_dump($city);
var_dump($province);
var_dump($country);
?>
