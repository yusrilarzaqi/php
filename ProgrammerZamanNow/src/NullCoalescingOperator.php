<?php
$data = [
  "action" => "Hi"
];

/* if (isset($data['action'])) { */
/*   $action = $data["action"]; */
/* } else { */
/*   $action = "nothing"; */
/* } */

$action = $data['action'] ?? 'nothing';
echo $action . PHP_EOL;
?>
