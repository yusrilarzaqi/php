<?php
// Assosiative
$mahasiswa = [
  ["nama" => "Yusril arzaqi",
    "nis" => "185512",
    "email" => "arzaqiyusril@gmail.com",
    "jurusan" => "Tehnik komputer jaringan",
    "gambar" => "img/5.jpg"],
  ["nama" => "Adam Saputra",
    "nis" => "185712",
    "email" => "adam145@gmail.com",
    "jurusan" => "Tehnik komputer jaringan",
    "gambar" => "img/6.jpg"]
  ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Latihan1</title>
</head>
<body>
  <h1>Daftar Mahasiswa</h1>
  <?php foreach($mahasiswa as $mhs) : ?>
    <ul>
      <li>
        <img src="<?= $mhs["gambar"] ?>"/>
      </li>
      <li>Nama :<?= $mhs["nama"] ?></li>
      <li>NIS :<?= $mhs["nis"] ?></li>
      <li>Jurusan :<?= $mhs["jurusan"] ?></li>
      <li>Email :<?= $mhs["email"] ?></li>
    </ul>
  <?php endforeach; ?>
  
</body>
</html>