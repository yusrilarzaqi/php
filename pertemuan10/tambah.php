<?php
$conn = mysqli_connect("localhost", "u0_a430", "", "phpdasar");

// check apakah tombol sumbit sudah ditekan atau belum 
if(isset($_POST["sumbit"])) {

  // mengambil isi query
  $nrp = $_POST["nrp"];
  $nama = $_POST["nama"];
  $email = $_POST["email"];
  $jurusan = $_POST["jurusan"];
  $gambar = $_POST["gambar"];
  
  // query insert
  $query = "INSERT INTO mahasiswa VALUES ('8', '$nrp', '$nama', '$email', '$jurusan', '$gambar')";
  mysqli_query($conn, $query);

  // check apakah data berhasil ditambahkan tau tidak
  var_dump(mysqli_affected_rows($conn))

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
        <input type="text" name="nrp" id="nrp">
      </li>
      <li>
        <label for="nama">Nama : </label>
        <input type="text" name="nama" id="nama">
        <br>
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
        <button type="submit" name="submit">Kirim</button>
      </li>
    </ul>
  </form>
  
</body>
</html>
