<?php 
//superglobal
//get (mengambil)
//karena variabel yang dibuat di dalem function maka berlaku di dalam function saja kecuali jika memakai global didalam variabelnya

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
    <title>Latihan get1</title>
</head>
<body>

    <h1>Daftar buku</h1>
    <p>buku yang tersedia:</p>
    <ul>
        <?php foreach ($buku as $key) : ?>
            <li>
                <a href="lthget02.php?nama=<?= $key["nama"]; ?>&
                penulis=<?= $key["penulis"]; ?>&
                tahun=<?= $key["tahun"]; ?>&
                idBuku=<?= $key["idBuku"]; ?>&
                gambar=<?= $key["gambar"]; ?>"><?= $key["nama"]; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>