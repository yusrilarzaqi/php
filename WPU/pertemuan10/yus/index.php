<?php

require 'functions.php';

$data = query("SELECT * FROM linux");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman admin</title>
</head>
<body>
    <h1>Daftar Distro Linux</h1>
    <a href="tambah.php">Tambah data</a>
    <br><br>

    <table border="1",cellpadding="15", cellspacing="0">
        <tr>
            <td>No.</td>
            <td>Aksi</td>
            <td>Gambar</td>
            <td>Nama</td>
            <td>Base on</td>
            <td>Deskipsi</td>
        </tr>

        <?php $i = 1;?>
        <?php foreach( $data as $row):?>

        <tr>
            <td><? $i; ?></td>
            <td>
                <a href="">update</a>
                <a href="">delete</a>
            </td>
            <td><img src="img/<?= $row["gambar"]?>" alt="" width="54"></td>
            <td><?= $row["nama"] ?></td>
            <td><?= $row["base"]?></td>
            <td><?= $row["deskripsi"]?></td>
        </tr>

        <?php $i++; ?>
        <?php endforeach; ?>

    </table>

</body>
</html>