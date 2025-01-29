<?php 
require 'functions.php';

//cek apakah tombol regis sudah ditekan atau belum
if ( isset($_POST["register"]) ) {
    
    //cek apakah data berhasil ditambah atau tidak
    if ( registrasi($_POST) > 0 ) {
        echo "
            <script>
                alert('Data berhasil ditambahkan!');
            </script>
        ";
    } else {
        echo mysqli_error($conn);
    }

    

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Akun</title>

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
        input[type="password"] {
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
    
    <h1>Registrasi</h1>
    <form action="" method="post">
        
        <!-- input email -->
        <label for="email">Email</label>
        <input type="text" name="email" id="email" placeholder="Masukan Email...">
        
        <!-- input password -->
        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Masukan Password..">
        
        <!-- input konfirmasi password -->
        <label for="password2">Konfirmasi Password</label>
        <input type="password" name="password2" id="password2" placeholder="Konfirmasi Password..">
    
        <button type="submit" name="register">Daftar</button>
    </form>

</body>
</html>