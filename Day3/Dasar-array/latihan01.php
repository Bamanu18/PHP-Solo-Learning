<?php
//membuat var untuk menyimpan array dan elemen

//array biasa
// $user = ["Bagas", "0895414564310", "7", "20"];

//array multi dimensi atau array dalam array
$user = [
    ["Bagas", "0895414564310", "7", "20"],
    ["Ai", "0895414564290", "6", "21"],
    
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
</head>
<body>

    <h1>Data User</h1>
    <p>menampilkan array menggunakan dasar menggunakan foreach</p>
    <!-- <ul>
        <?php // foreach ($user as $key) : ?>
            <li> <? //= $key ?> </li>
        <?// endforeach; ?>
    </ul> -->

    <p>Menampilkan array secara manual</p>
    <ul>
        <li>Nama : <?//=$user[0]; ?></li>
        <li>Notlp : <?//= $user[1]; ?></li>
        <li>Sms : <?//=$user[2]; ?></li>
        <li>Usia : <?//= $user[3]; ?></li>
    </ul><br>

    <p>Menampilkan array multi dimensi menggunakan foreach</p>
    <?php foreach ($user as $key) : ?>
    <ul>
        <li>Nama : <?= $key[0]; ?></li>
        <li>Notlp : <?= $key[1]; ?></li>
        <li>Sms : <?= $key[2]; ?></li>
        <li>Usia : <?= $key[3]; ?></li>
    </ul>
    <?php endforeach; ?>

</body>
</html>