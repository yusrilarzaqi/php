<?php
// connect mysql
$conn = mysqli_connect("localhost", "u0_a430", "", "phpdasar");

function query( $query ){
  global $conn;
  $result = mysqli_query($conn, $query);
  $rows = [];
  while( $row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}
?>
