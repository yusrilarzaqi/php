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
  $gambar = htmlspecialchars($data["gambar"]);

  // query insert
  $query = "INSERT INTO linux VALUES ('', '$nama', '$base', '$deskripsi', '$tahun', '$kategori','$gambar')";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
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
  $query = "SELECT * FROM linux WHERE nama LIKE '%$keyword%' OR kategori LIKE '%$keyword%'
  ";

  return query($query);
}

?>
