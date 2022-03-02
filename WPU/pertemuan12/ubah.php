<?php
// import file fuctions.php
require "functions.php";

// ambil data di URL
$id = $_GET["id"];

// query data mahasisa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];
// var_dump($mhs[0]["nrp"]);


// check apakah tombol submit sudah ditekan atau belum 
if(isset($_POST["submit"])) {

  // jika data berhasil diubah ke database
  if( update($_POST) > 0 ) {
    echo "
      <script>
        alert('data berhasil diubah !');
        document.location.href = 'index.php';
      </script>
    ";
  }else{
    echo "data tidak berhasil diubah";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ubah data Mahasiswa</title>
</head>
<body>
  
  <h1>Ubah data Mahasiswa</h1>
  
  <form action="" method="post">
    <input type="hidden" name="id" value="<?= $mhs['id'];?>">
    <ul>

      <li>
        <label for="nrp">NRP : </label>
        <input type="text" name="nrp" id="nrp" required  value="<?= $mhs['nrp']; ?>">
      </li>
      <li>
        <label for="nama">Nama : </label>
        <input type="text" name="nama" id="nama" required value="<?= $mhs['nama']; ?>">
        <br>
      </li>
      <li>
        <label for="email">Email : </label>
        <input type="text" name="email" id="email" required value="<?= $mhs['email']; ?>">
      </li>
      <li>
        <label for="jurusan">Jurusan : </label>
        <input type="text" name="jurusan" id="jurusan" required value="<?= $mhs['jurusan']; ?>">
      </li>
      <li>
        <label for="gambar">Gambar : </label>
        <input type="text" name="gambar" id="gambar" required value="<?= $mhs['gambar']; ?>">
      </li>
      <li>
        <button type="submit" name="submit">Ubah</button>
      </li>
    </ul>
  </form>
  
</body>
</html>
