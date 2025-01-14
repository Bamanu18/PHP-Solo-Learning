<?php
//pengulangan
//for,while,do..while
//foreach(pengulangan khusus array)

//i berisikan nilai 0, apakah 0/var i lebih kecil dri 5? jika iya lakukan pengulangan sebanyak 5 kali
//i=0 nilai awal, i<5 kondisi, i++ increment(maju)/decrement(mundur)--
for($i = 0; $i < 5; $i++){
    echo "Hallo dunia <br>";
} 
echo "<hr>";

//while:dicek terlebih dahulu jika bernilai true maka ditampilkan, sebaliknya jika false maka tidak ditampilkan(eror)
$b = 0; //(var nilai awal diluar while)
while ($b < 4) {
    //while mengecek kondisi terlebih dahulu jika true maka ditampilkan
    echo "hallo dunia 2 <br>";
$b++; //increment
}
echo "<hr>";

//do..while
$c = 0; //nilai awal
do {
    echo "hello dunia 3 <br>";
    $c++; //berbeda dengan while do akan melakukan hasil terlebih dahulu setelah itu dicek
} while ($c < 6); //jika kondisinya true maka ditampilkan sebanyak 6x jika false maka ditampilkan 1x
?>