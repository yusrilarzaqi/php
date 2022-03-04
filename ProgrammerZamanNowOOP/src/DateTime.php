<?php
$date = new DateTime();
$date->setDate(2003, 7, 23);
$date->setTime(11, 32, 44);


$date->add(new DateInterval("P1Y"));

var_dump($date);

$dateInterval = new DateInterval("P1M");
$dateInterval->invert = 1;

$date->add($dateInterval);

var_dump($date);

$now = new DateTime();
$now->setTimezone(new DateTimeZone("Asia/Jakarta"));

echo $now->format("l, d m y") . PHP_EOL;
echo $now->format("g:i:s:a") . PHP_EOL;

$custom = DateTime::createFromFormat("Y-m-d H:i:s", "2000-07-27 00:00:00", new DateTimeZone("Japan"));

var_dump($custom);



?>