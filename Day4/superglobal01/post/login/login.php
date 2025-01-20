<?php 
    //cek apakah sudah ditekan tombol submit
    if ( isset($_POST["submit"]) ){
        //cek username dan password
        if ( $_POST["username"] == "admin" && $_POST["password"] == "123" ){
            //jika benar, redirect ke halaman admin
            header("Location: dashboard.php");
            exit;
        }
        //jika salah, tampilkan pesan kesalahan
        else {
            $error = true;
        }
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <h1>Login</h1>
    <?php if( isset($error) ) : ?>
        <h2>Username/password salah</h2>
    <?php endif; ?>

    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Username</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="submit">login</button>
            </li>
        </ul>
    </form>
</body>
</html>