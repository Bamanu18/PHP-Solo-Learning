<?php
function salam($nama = "bagas"){
    
    $time = date("H");
    if ($time < "12"){ 
        echo "Selamat Pagi"; 
    } else if ($time >= "12" && $time < "15") { echo "Selamat Siang"; 
    } else if ($time >= "15" && $time < "19") { echo "Selamat Sore"; 
    } else if($time >= "19") { 
        echo "Selamat Malam"; 
    }

    return " $nama!";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Function-date</title>
</head>
<body>
    <h1><?= salam(); ?></h1>
</body>
</html>