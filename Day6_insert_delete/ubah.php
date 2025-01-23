<?php 
require 'functions.php';

//mengambil data id dari url
$id = $_GET["idBuku"];

//mengambil query data pada tbl detail buku berdasarkan id
$buku = query("SELECT * FROM detail_buku WHERE idBuku = $id")[0];

//cek apakah tombol submit sudah ditekan atau belum
if ( isset($_POST["submit"]) ) {

    //cek apakah data berhasil diubah atau tidak
    if ( ubahData($_POST) > 0 ) {
        echo "
            <script>
                alert('Data berhasil diubah!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal diubah!');
                document.location.href = 'index.php';
            </script>
        ";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    
    <h1>Tambah Data Buku</h1>
    <form action="" method="POST">

        <input type="hidden" name="idBuku" value="<?= $buku["idBuku"]; ?>">
        
        <label for="nama">Nama Buku:</label> <br>
        <input type="text" id="nama" name="nama" value="<?= $buku["namabk"]; ?>"><br><br>
        
        <label for="penulis">Penulis:</label> <br>
        <input type="text" id="penulis" name="penulis" value="<?= $buku["penulisbk"]; ?>"><br><br>
        
        <label for="nsb">No Seri Buku:</label> <br>
        <input type="text" id="nsb" name="nsb" value="<?= $buku["nsb"]; ?>"><br><br>
        
        <label for="gambar">Gambar:</label> <br>
        <input type="text" id="gambar" name="gambar" value="<?= $buku["gambarbk"]; ?>"><br><br>
        
        <button type="submit" name="submit">Ubah Data!</button>
        <button><a href="index.php">Batal</a></button>
    </form>

</body>
</html>