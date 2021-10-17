<?php
require 'functions.php';

$mahasiswa = query("SELECT * FROM mahasiswa");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Halaman admin</title>
</head>
<body>
  <h1>Daftar Mahasiswa</h1>

  <a href="tambah.php">Tambah data</a>
  <br><br>

  <table border="1", cellpadding="10", cellspacing="0">
    <tr>
      <td>No.</td>
      <td>Aksi</td>
      <td>Gambar</td>
      <td>NRP</td>
      <td>Nama</td>
      <td>Email</td>
      <td>Jurusan</td>
    </tr>
    <?php $i = 1;?>
    <?php foreach( $mahasiswa as $row ) : ?>
    <tr>
    <td><?= $i; ?></td>
      <td>
        <a href="">update</a>
        <a href="">delete</a>
      </td>
      <td><img src="img/<?= $row["gambar"]; ?>" alt="" width="54"></td>
      <td><?= $row["nrp"]; ?></td>
      <td><?= $row["nama"]; ?></td>
      <td><?= $row["email"]; ?></td>
      <td><?= $row["jurusan"]; ?></td>
    </tr>
    <?php $i++;?>
    <?php endforeach; ?>
    
  </table>
  
  
</body>
</html>
