<?php
// connect mysql
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function query( $query ){
  global $conn;
  $result = mysqli_query($conn, $query);
  $rows = [];
  while( $row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}



function tambah($data) {
  global $conn;
  $tahun = htmlspecialchars($data["tahun"]);
  $nama = htmlspecialchars($data["nama"]);
  $base = htmlspecialchars($data["base"]);
  $deskripsi = htmlspecialchars($data["deskripsi"]);
  $kategori = htmlspecialchars($data["kategori"]);

  // $gambar = htmlspecialchars($data["gambar"]);
  // upload gambar
  $gambar = upload();
  
  if(!$gambar){
    return false;
  }

  // query insert
  $query = "INSERT INTO linux VALUES ('', '$nama', '$base', '$deskripsi', '$tahun', '$kategori','$gambar')";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function upload (){

  $namaFile = $_FILES['gambar']['name'];
  $ukuranFile = $_FILES['gambar']['size'];
  $error = $_FILES['gambar']['error'];
  $tmpName = $_FILES['gambar']['tmp_name'];

  // cek apakah tidak ada gambar yang diupload
  if($error == 4){
    echo "
    <script>
      alert('pilih gambar terlebih dahulu');
    </script>";
    return false;
  }

  // yang boleh diupload hanya gambar
  $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
  $ekstensiGambar = explode('.', $namaFile);
  $ekstensiGambar = strtolower(end($ekstensiGambar));

  if(!in_array($ekstensiGambar, $ekstensiGambarValid)){
    echo "<script> alert('file yang anda masukan bukan file gambar'); </script>";
    return false;
  }
  
  // cek jika ukuranya terlalu besar
  if ($ukuranFile > 1000000){
    echo "<script> alert('file yang anda masukan terlalu besar'); </script>";
    return false;  
  }

  // lolos pengecekan, dan siap dimasukan ke dalam direktori
  // generate nama file baru
  $namaFIleBaru = uniqid();
  $namaFIleBaru .= '.';
  $namaFIleBaru .= $ekstensiGambar;
  move_uploaded_file($tmpName, 'img/' . $namaFIleBaru);

  return $namaFIleBaru; 
}


function hapus($id){
  global $conn;
  mysqli_query($conn, "DELETE FROM linux WHERE id = $id");
  return mysqli_affected_rows($conn);
}

function update($data) {
  global $conn;

  $id = $data["id"];
  $tahun = htmlspecialchars($data["tahun"]);
  $nama = htmlspecialchars($data["nama"]);
  $base = htmlspecialchars($data["base"]);
  $kategori = htmlspecialchars($data["kategori"]);
  $deskripsi = htmlspecialchars($data["deskripsi"]);
  $gambarLama = htmlspecialchars($data["gambarLama"]);

  // cek apakah user pilih gambar baru / tidak
  if ($_FILES['gambar']['error'] == 4){
    $gambar = $gambarLama;
  }else{
    $gambar = upload();
  }
  $gambar = htmlspecialchars($data["gambar"]);
  $query = "UPDATE linux SET 
    nama = '$nama',
    base = '$base',
    deskripsi = '$deskripsi',
    tahun = '$tahun',
    kategori = '$kategori',
    gambar = '$gambar'
    WHERE id = $id
  ";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function cari($keyword){
  $query = "SELECT * FROM linux WHERE nama LIKE '%$keyword%' OR kategori LIKE '%$keyword%' OR base LIKE '%$keyword%'
  ";

  return query($query);
}


function registrasi($data){
  global $conn;

  $username = strtolower(stripslashes($data['username']));
  $password = mysqli_real_escape_string($conn, $data['password']);
  $password2 = mysqli_real_escape_string($conn,$data['password2']);

  // cek apakah username sudah ada
  $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

  if (mysqli_fetch_assoc($result)){
    echo "<script> alert('username yang dipilih sudah ada, silahkan pilih yang lain'); </script> ";
    return false;
  }

  // confirm 
  if( $password !== $password2){
    echo "<script> alert('konfirmasi password tidak sesuai');</script>";
    return false;
  }

  // enkripsi password
  $password = password_hash($password, PASSWORD_DEFAULT);

  // tambahkan ke database
  mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");



  return mysqli_affected_rows($conn);
}
?>
