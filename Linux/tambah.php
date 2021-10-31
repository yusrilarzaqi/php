<?php
// import file fuctions.php
require "functions.php";



// check apakah tombol submit sudah ditekan atau belum 
if(isset($_POST["submit"])) {
  // var_dump($_POST);
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
  <title>Tambah data Distro Linux</title>
</head>
<body>
  
  <h1>Tambah data Distro Linux</h1>
  
  <form action="" method="post">
    <ul>
      <li>
        <label for="tahun">Tahun : </label>
        <input type="text" name="tahun" id="tahun" required>
      </li>
      <li>
        <label for="nama">Nama : </label>
        <input type="text" name="nama" id="nama" required>
        <br>
      </li>
      <li>
        <label for="base">Base : </label>
        <input type="text" name="base" id="base" required>
      </li>
      <li>
        <label for="kategori">Kategori : </label>
        <input type="text" name="kategori" id="kategori" required>
      </li>
      <li>
        <label for="deskripsi">Deskripsi : </label>
        <!-- <input type="text" name="deskripsi" id="deskripsi" required> -->
        <br>
        <textarea name="deskripsi" id="deskripsi" cols="30" rows="10" required></textarea>
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
