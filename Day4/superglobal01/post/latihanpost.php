<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan01
    </title>
</head>
<body>

    <!-- 1. form berpindah tab -->
    <!-- <h1>latihan dasar post</h1>
    <form action="dta-lth-post.php" method="post">
        <label for="username">username</label>
        <input type="text" name="username" id="username">
        <button type="submit" name="submit">Kirim</button>
    </form> -->

    <!-- menangkap form method post -->
    <!-- jika sudah disubmit akan muncul username -->
    <?php if ( isset($_POST["submit"])){ ?>
        <p> selamat datang <?= $_POST["username"] ?></p>
    <?php } ?> 
    

    <!-- 2. form mengirim tab itu sendiri tampa menggunakan action -->
    <h1>Latihan dasar post</h1>
    <form method="post">
        <label for="username">username</label>
        <input type="text" name="username" id="username">
        <button type="submit" name="submit">Kirim</button>
    </form>

</body>
</html>