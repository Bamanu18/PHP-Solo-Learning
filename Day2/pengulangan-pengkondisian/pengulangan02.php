<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengulangan02</title>
</head>
<body>

    <h1>Ini adalah pengulangan</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <!-- karna pengulangannya ingin 3x maka memakai <= jika hanya memakai < maka pengulangannya 2x -->
        <?php for ($i= 1; $i <= 3 ; $i++) : ?>
            <!-- jika ingin menggunakan endfor gunakan titik dua(:) -->

            <tr> 
            <!-- sebagai kolom--> 
            <?php for ($j = 1; $j <= 5 ; $j++) { ?>
                <!-- sebagai data -->
                <td> <?php echo "$i,$j"; ?> </td> 
            <?php } ?>
            </tr>

        <?php endfor ?>
    </table>
    
</body>
</html>