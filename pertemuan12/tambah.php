<?php
// import file fuctions.php
require "functions.php";

// check apakah tombol submit sudah ditekan atau belum 
if(isset($_POST["submit"])) {

  // jika data berhasil dimasukan ke database
  if( tambah($_POST) > 0 ) {
    echo "
      <script>
        alert('data berhasil ditambahkan !');
        document.location.href = 'index.php';
      </script>
    ";
  }else{
    echo "data tidak berhasil ditambahkan";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Tambah data Mahasiswa</title>
</head>
<body>
  
  <h1>Tambah data Mahasiswa</h1>
  
  <form action="" method="post">
    <ul>
      <li>
        <label for="nrp">NRP : </label>
        <input type="text" name="nrp" id="nrp" required>
      </li>
      <li>
        <label for="nama">Nama : </label>
        <input type="text" name="nama" id="nama" required>
        <br>
      </li>
      <li>
        <label for="email">Email : </label>
        <input type="text" name="email" id="email" required>
      </li>
      <li>
        <label for="jurusan">Jurusan : </label>
        <input type="text" name="jurusan" id="jurusan" required>
      </li>
      <li>
        <label for="gambar">Gambar : </label>
        <input type="text" name="gambar" id="gambar" required>
      </li>
      <li>
        <button type="submit" name="submit">Kirim</button>
      </li>
    </ul>
  </form>
  
</body>
</html>
