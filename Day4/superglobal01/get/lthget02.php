<?php 
//jika belum salah satu var tidak terpenuhi maka dilempar kembali ke halaman sebelumnya
if ( !isset($_GET["nama"]) ||
    $_GET["penulis"] ||
    $_GET["tahun"] ||
    $_GET["idBuku"]) {

        //redirect
        header("Location: get01.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>detial buku</title>
</head>
<body>
    <h1>detail buku</h1>
    <ul>
        <li>
            <img src="../Array-Asociative/img/<?= $_GET["gambar"] ?>">
        </li>
        <li>nama :<?= $_GET["nama"] ?></li>
        <li>penulis :<?= $_GET["penulis"] ?></li>
        <li>tahun :<?= $_GET["tahun"] ?></li>
        <li>id Buku :<?= $_GET["idBuku"] ?></li>
    </ul>

    <a href="get01.php">Kembali ke daftar buku</a>
</body>
</html>