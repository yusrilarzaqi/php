<?php
// import file fuctions.php
require "functions.php";

// ambil data di URL
$id = $_GET["id"];

// query data mahasisa berdasarkan id
$distro = query("SELECT * FROM linux WHERE id = $id")[0];
// var_dump($distro[0]["tahun"]);


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
  <title>Ubah data Distro Linux</title>
</head>
<body>
  
  <h1>Ubah data Distro Linux</h1>
  
  <form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $distro['id'];?>">
    <input type="hidden" name="gambarLama" value="<?= $distro['gambar'];?>">
    <ul>
      <li>
        <label for="tahun">Tahun : </label>
        <input type="text" name="tahun" id="tahun" required  value="<?= $distro['tahun']; ?>">
      </li>
      <li>
        <label for="nama">Nama : </label>
        <input type="text" name="nama" id="nama" required value="<?= $distro['nama']; ?>">
        <br>
      </li>
      <li>
        <label for="base">Base : </label>
        <input type="text" name="base" id="base" required value="<?= $distro['base']; ?>">
      </li>
      <li>
        <label for="kategori">Kategori : </label>
        <input type="text" name="kategori" id="kategori" required value="<?= $distro['kategori']; ?>">
      </li>
      <li>
        <label for="deskripsi">Deskripsi : </label>
        <br>
        <textarea name="deskripsi" id="deskripsi" cols="30" rows="10" required><?= $distro['deskripsi']; ?></textarea>
      </li>
      <li>
        <label for="gambar">Gambar : </label> <br>
        <img src="img/<?= $distro['gambar']; ?> "width='200'> <br>
        <input type="file" name="gambar" id="gambar" required>
      </li>
      <li>
        <button type="submit" name="submit">Ubah</button>
      </li>
    </ul>
  </form>
  
</body>
</html>
