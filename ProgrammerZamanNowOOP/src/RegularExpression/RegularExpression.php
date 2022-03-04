<?php
$matches = [];

// $result = (bool) preg_match_all("/Yusril|zaqi/i", "yusril arzaqi", $matches);

// var_dump($result);
// var_dump($matches);


// $result = preg_replace("/anjing|bangsat/i", "***", "Dasar Lu anjing, bangsat");
// var_dump($result);

$result = preg_split("/[\s,-]/","Lorem ipsum dolor sit amet-consectetur adipisicing elit. Eum, rem!");

var_dump($result);

?>
