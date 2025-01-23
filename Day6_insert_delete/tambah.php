<?php 
require 'functions.php';

//cek apakah tombol submit sudah ditekan atau belum
if ( isset($_POST["submit"]) ) {

    //cek apakah data berhasil ditambahkan atau tidak
    if ( tambah($_POST) > 0 ) {
        echo "
            <script>
                alert('Data berhasil ditambahkan!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal ditambahkan!');
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
        <label for="nama">Nama Buku:</label> <br>
        <input type="text" id="nama" name="nama" required><br><br>
        
        <label for="penulis">Penulis:</label> <br>
        <input type="text" id="penulis" name="penulis" required><br><br>
        
        <label for="nsb">No Seri Buku:</label> <br>
        <input type="text" id="nsb" name="nsb" required><br><br>
        
        <label for="gambar">Gambar:</label> <br>
        <input type="text" id="gambar" name="gambar" required><br><br>
        
        <button type="submit" name="submit">Tambah Data!</button>
    </form>

</body>
</html>