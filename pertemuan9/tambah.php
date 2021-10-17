<?php
if ( isset($_POST["submit"]) ) {
  var_dump($_POST);
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
        <label for="nrp">Nrp : </label>
        <input type="text" name="nrp" id="nrp">
      </li>
      <li>
        <label for="nama">Nama : </label>
        <input type="text" name="nama" id="nama">
      </li>
      <li>
        <label for="email">Email : </label>
        <input type="text" name="email" id="email">
      </li>
      <li>
        <label for="jurusan">Jurusan : </label>
        <input type="text" name="jurusan" id="jurusan">
      </li>
      <li>
        <label for="gambar">Gambar : </label>
        <input type="text" name="gambar" id="gambar">
      </li>
      <li>
        <button type="submit" name="submit">Tambah data !</button>
      </li>
    </ul>
  </form>
  
</body>
</html>