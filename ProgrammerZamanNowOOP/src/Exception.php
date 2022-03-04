<?php

require_once "exception/Validation.php";

$loginRequest = new LoginRequest();
$loginRequest->username = "";
$loginRequest->password = "";

try {
  validateLoginRequest($loginRequest);
} catch (ValidationException | Exception $exception) {
  echo "Error : {$exception->getMessage()}" . PHP_EOL;
  echo $exception->getTraceAsString() . PHP_EOL;

  // var_dump($exception->getTrace());
} finally {
  echo "Akan dipanggil" . PHP_EOL;
} 
