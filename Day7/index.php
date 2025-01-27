<?php 
//require(butuh file dari functions/ hanya tinggal mengambil fungsi dari file functions.php)
require 'functions.php';

//mengambil data dri tbl
$detailbk = query("SELECT * FROM detail_buku");

//mengecek apakah tombol cari sudah ditekan atau belum
if ( isset($_POST["cari"]) ){
    $detailbk = cari(keyword: $_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku</title>

    <style>
        h1 {
            text-align: center;
        }

        .search-container {
            text-align: center;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;;
        }

        .search-container a {
            text-decoration: none;
            color: white;
        }

        button:hover {
            opacity: 0.8;
        }

        input[type=text] {
            width: 25%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
        }

        table {
            margin-left: auto;
            margin-right: auto;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        td {
            text-align: center;
        }
    </style>
</head>
<body>
    
    <h1>Data Buku</h1>

    <div class="search-container">
        <form action="" method="post">

            <button><a href="tambah.php">Tambah data buku</a></button>
            
            <input type="text" name="keyword" placeholder="Masukan keyword pencarian ..." autocomplete="off">
            
            <button type="submit" name="cari">Cari</button>

        </form>
    </div>
    
    <br>
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
                <a href="ubah.php?idBuku=<?= $row["idBuku"]; ?>">Edit</a> |
                <a href="hapus.php?idBuku=<?= $row["idBuku"]; ?>" onclick="return confirm('yakin?');">Hapus</a>
            </td>
            <td><img src="img/tmp/<?= $row["gambarbk"]; ?>" width="50"></td>
            <td><?= $row["namabk"]; ?></td>
            <td><?= $row["penulisbk"]; ?></td>
            <td><?= $row["nsb"]; ?></td>
        </tr>

        <?php $i++; ?>
        <?php endforeach; ?>
    </table>

</body>
</html>