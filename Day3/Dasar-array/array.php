<?php
//array
//variabel yang menyimpan banyak nilai
//elemen pada array boleh memiliki tipe yang berbeda

//pasangan key dan value
//keynya adalah index dan dimulai dari 0

//nilai yang ada di dalam array disebut elemen

//membuat array
//cara lama
$hari = array("senin", "selasa", "rabu");

//cara baru
$bulan = ["januari", "februari", "maret"];
$tahun = [12, "februari", false];

//menampilkan array
//var_dump() / print_r
var_dump($hari); //digunakan untuk debuging apakah di dalam hari ada isinya
echo "<br>";
print_r($bulan);

//output vardump
// array(3) { [0]=> string(5) "senin" [1]=> string(6) "selasa" [2]=> string(4) "rabu" }
//array(3)artiya di dalam array berisikan 3 elemen [0][1] merupakan key(index)

//output print r
// Array ( [0] => januari [1] => februari [2] => maret )
//lebih simple hanya menampilkan key(index) dan value pada array

//menambahkan elemen pada array
$bulan [] = "maret";
echo "<br>";
var_dump($bulan);

//output menambahkan elemen para array
// array(4) { [0]=> string(7) "januari" [1]=> string(8) "februari" [2]=> string(5) "maret" [3]=> string(5) "maret" }
//artinya kurung sikunya[]kosong, saya ingin menambahkan maret di akhir elemen sebelumnya pada array bulan 

?>