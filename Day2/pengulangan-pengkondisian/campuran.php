<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengulangan02</title>

    <style>
        .warna-kolom {
            background-color: aquamarine;
        }
    </style>
</head>
<body>

    <h1>Ini adalah pengulangan dan pengkondisian</h1>
    <p>berikan warna tiap baris yg ganjil</p>

    <table border="1" cellpadding="10" cellspacing="0">
        <!-- karna pengulangannya ingin 3x maka memakai <= jika hanya memakai < maka pengulangannya 2x -->
        <?php for ($i= 1; $i <= 5 ; $i++) : ?> <!-- sebagai kolom--> 
            <!-- jika ingin menggunakan endfor gunakan titik dua(:) -->

            <!-- pengkondisian pewarnaan -->
            <?php if ($i %2 == 1) : ?>
                <tr class="warna-kolom"> 
            <?php else :?>
                <tr>
            <?php endif ?>
            <!-- sebagai baris --> 
            <?php for ($j = 1; $j <= 5 ; $j++) { ?>
                <!-- sebagai data -->
                <td> <?php echo "$i,$j"; ?> </td> 
            <?php } ?>
            </tr>

        <?php endfor ?>
    </table>
    
    <br>
    <p>berikan warna tiap baris yg genap</p>
    <table border="1" cellpadding="10" cellspacing="0">
        <!-- karna pengulangannya ingin 3x maka memakai <= jika hanya memakai < maka pengulangannya 2x -->
        <?php for ($i= 1; $i <= 5 ; $i++) : ?> <!-- sebagai kolom--> 
            <!-- jika ingin menggunakan endfor gunakan titik dua(:) -->

            <!-- pengkondisian pewarnaan -->
            <?php if ($i %2 == 0) : ?>
                <tr class="warna-kolom"> 
            <?php else :?>
                <tr>
            <?php endif ?>
            <!-- sebagai baris --> 
            <?php for ($j = 1; $j <= 5 ; $j++) { ?>
                <!-- sebagai data -->
                <td> <?php echo "$i,$j"; ?> </td> 
            <?php } ?>
            </tr>

        <?php endfor ?>
    </table>
</body>
</html>