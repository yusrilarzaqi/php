<?php
if (!isset($_GET["nama"]) ||
    !isset($_GET["nis"]) ||
    !isset($_GET["email"]) ||
    !isset($_GET["jurusan"]) ||
    !isset($_GET["gambar"])
    ) {
  header("Location: latihan1.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Latihan 2</title>
</head>
<body>
    <ul>
      <li>
        <img src="<?= $_GET["gambar"] ?>"/>
      </li>
      <li>Nama :<?= $_GET["nama"] ?></li>
      <li>NIS :<?= $_GET["nis"] ?></li>
      <li>Jurusan :<?= $_GET["jurusan"] ?></li>
      <li>Email :<?= $_GET["email"] ?></li>
    </ul>
  <a href="latihan1.php">Kembali</a>
</body>
</html>