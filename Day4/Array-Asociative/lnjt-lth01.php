<?php

//array asscociative
//definisinya sama
//keynya bukan index melainkan tipe string yang dibuat
//bungkusan luarnya masih numerik, tetapi dalam arraynya sudah string contohnya : nama sebagai key index dari array variable buku


$buku = [
[
    "gambar" => "1.png",
    "nama" => "Hujan",
    "penulis" => "Tere Liye",
    "tahun" => "2010",
    "idBuku" => "126983",
],
[
    "gambar" => "2.png",
    "nama" => "Pulang",
    "penulis" => "Tere Liy",
    "tahun" => "2011",
    "idBuku" => "126666"
]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lanjut lth01</title>
</head>
<body>
    <h1>Data Buku</h1>
    <p>merupakan data buku-buku tere liye</p>
    <?php foreach ($buku as $key) : ?>
    <ul>
        <li>
            <img src="img/<?= $key["gambar"]; ?>">
        </li>
        <li>Nama :<?= $key["nama"] ?></li>
        <li>penulis :<?= $key["penulis"] ?></li>
        <li>tahun :<?= $key["tahun"] ?></li>
        <li>id buku :<?= $key["idBuku"] ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>
