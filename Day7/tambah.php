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
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        h1 {
            color: #333;
            text-align: center;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="file"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            margin-bottom: 20px;
        }

        button[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    
    <h1>Tambah Data Buku</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="nama">Nama Buku:</label> <br>
        <input type="text" id="nama" name="nama" required><br><br>
        
        <label for="penulis">Penulis:</label> <br>
        <input type="text" id="penulis" name="penulis" required><br><br>
        
        <label for="nsb">No Seri Buku:</label> <br>
        <input type="text" id="nsb" name="nsb" required><br><br>
        
        <label for="gambar">Gambar:</label> <br>
        <input type="file" id="gambar" name="gambar" required><br><br>
        
        <button type="submit" name="submit">Tambah Data!</button>
    </form>

</body>
</html>