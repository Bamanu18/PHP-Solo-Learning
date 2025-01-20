<?php 
//require(butuh file dari functions/ hanya tinggal mengambil fungsi dari file functions.php)
require 'functions.php';

//mengambil data dri tbl
$detailbk = query("SELECT * FROM detail_buku");

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard admin</title>
</head>
<body>
    
    <h1>Data Buku</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Nama Buku</th>
            <th>Penulis</th>
            <th>Nomor Seri Buku</th>
        </tr>

        <!-- untuk menambahkan nomor urut otomatis -->
        <?php $i = 1; ?>
        <!-- melakukan pengulangan -->
        <?php foreach ($detailbk as $row) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="">Edit</a> |
                <a href="">Hapus</a>
            </td>
            <td><img src="img/<?= $row["gambarbk"]; ?>" width="50"></td>
            <td><?= $row["namabk"]; ?></td>
            <td><?= $row["penulisbk"]; ?></td>
            <td><?= $row["nsb"]; ?></td>
        </tr>

        <?php $i++; ?>
        <?php endforeach; ?>
    </table>

</body>
</html>