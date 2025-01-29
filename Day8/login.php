<?php 
require 'functions.php';

//cek apakah user telah menekan tombol login
if ( isset($_POST["login"]) ) {

    //mengambil data post
    $email = $_POST["email"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");

    //mengecek username ada/tidk
    if ( mysqli_num_rows($result) === 1 ) {

        //cek password
        $row = mysqli_fetch_assoc($result);
        if ( password_verify($password, $row["password"]) ) {
            header("Location: index.php");
            exit;
        }
    }

    $error = true;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

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
    
    <h1>Login</h1>
    <form action="" method="post">
        <!-- jika password/email salah -->
        <?php if (isset($error)) : ?>
            <p style="color: red; font-style: italic;">Password/email salah</p>
        <?php endif; ?>

        <!-- input email login -->
        <label for="email">Email</label>
        <input type="text" name="email" id="email" placeholder="Masukan Email...">
        
        <!-- input password -->
        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Masukan Password..">

        <button type="submit" name="login">Login</button>

    </form>



</body>
</html>