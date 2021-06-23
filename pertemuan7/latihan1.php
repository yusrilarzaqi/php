<?php 
// Super Globals
// $_GET
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
  <title>GET </title>
</head>
<body>
  <h1>Daftar Mahasiswa</h1>
  <?php foreach($mahasiswa as $mhs) : ?>
    <li>
      <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nis=<?= $mhs["nis"] ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
    </li>
  <?php endforeach; ?>
</body>
</html>