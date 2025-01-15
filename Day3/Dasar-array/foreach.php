<?php
//pengualangan pada array
//for / foreach
$angka = [1,2,3,4,5,6,7,8];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan foreach</title>

    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: aquamarine;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }

        .clear { clear: both; }
    </style>
</head>
<body>
    <h1>Latihan pengulangan menggunakan For dan Foreach</h1>

    <p>menggunakan for</p>

    <!-- mengulang secara manual -->
    <!-- saya ingin mengulang kotak 7x maka kodenya : -->
    <?php for ($i=0; $i < 7; $i++) { ?>
    <div class="kotak"> <?php echo $angka[$i]; ?> </div>
    <?php } ?>

    <div class="clear"></div>

    <!-- mengulang sebanyak elemen yang ada dalam array/otomatis -->
    <!-- dengan menggunakan count elemen yang ada didalm array diambil semua jikakurang dia berkurang jika bertambah dia menambah otomatis -->
    <!-- untuk mempersingkat php dengan echo gunakan = contohnya seperti dibawah -->
    <?php for ($i=0; $i < count($angka); $i++) { ?>
    <div class="kotak"> <?= $angka[$i]; ?> </div>
    <?php } ?>

    <div class="clear"></div>

    <!-- foreach(untuk setiap) -->
    <!-- untuk setiap elemen yang ada dalam array semua diambil dan angka sebagai var key -->
    <?php foreach ($angka as $key) : ?>
    <div class="kotak"> <?= $key; ?> </div>
    <?php endforeach; ?>

</body>
</html>