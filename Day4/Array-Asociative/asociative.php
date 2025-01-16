<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Associative</title>

    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: aquamarine;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
            transition: 1s;
        }

        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;
        }

        .clear { clear: both; }
    </style>
</head>
<body>

    <h1>Latihan Array Associative</h1>
    <p>melakukan pengulangan pada array yang bersarang menggunakan foreach</p>

    <?php 

$angka = [
    [1,2,3],
    [4,5,6],
    [7,8,9]
];

?>

    <?php foreach ($angka as $a) :?>
        <?php foreach ($a as $b) {?>
            <div class="kotak"><?= $b ?></div>
        <?php } ?>
        <div class="clear"></div>
    <?php endforeach; ?>

</body>
</html>

