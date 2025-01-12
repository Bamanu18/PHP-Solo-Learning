<?php
// Standar Output
// echo, print, print_r (untuk array debuging), var_dump
    // contoh :
        echo "<h3>1.Cara menampilkan teks huruf/angka </h3>";
        echo "Hello world"; echo "<br>";
        print("hallo dunia"); echo "<br>";
        var_dump("Bagas"); echo "<p>var dump digunakan untuk melihat informasi yang ditampilkan biasanya digunakan untuk debuging. kenapa ada teks string? itu merupakan tipe data yg dipakai lalu ukurannya berapa contoh bagas berarti 5huruf</p>";
        echo "<hr>";

// penulisan sintaks
    // variable:
        // Tidak boleh diawali angka, tapi boleh mengandung angka seperti nama1
        echo "<h3>2. Belajar tentang variable $/angka </h3>";
        $salam = "halo"; //s$salam merupakan variabel yang berisikan string halo
        echo "$salam, nama saya adalah";
        echo "<hr>";

    // html di dalam php:
        echo "<h3>3. HTML didalam php </h3>";
        echo "<h4>Selamat datang kembali</h4>";
        echo "<br>"; echo "<hr>";

// operator
    // arimatika
        // +, -, *, %, /
            echo "<h3>4. Operator arimatika 20 dibagi 10</h3>";
            $x1 = 10;
            $y = 20;
            echo $y / $x1; echo "<br>"; echo "<hr>";

    // Concat (Penggabungan String):
        // menggunakan . (jika menggunakan titik saja maka akan berdempatan, tetapi jika ingin ada jarak menggunakan ." ".)
            echo "<h3>5. Penggabungan String</h3>";
            $nama_depan = "Bagas";
            $nama_belakang = "Mulya";
            echo $nama_depan ." ". $nama_belakang; echo "<br>"; echo "<hr>";

    // Assignment(Operator penugasan)
        // jika mempunyai 2 variable yg sama maka operanor penugasan sangat berguna contohnya:
            echo "<h3>6. Operator penugasan(Assignment) dengan kasus -=(kurang sama dengan/10-12=-2)</h3>";
            $x = "10";
            $x -= "12"; 
        // jika hanya = maka variable 1 akan tertimpa dengan yg 2.
        // tetapi jika menambahkan operator sebelum = maka hasilnya akan berubah contoh 10 -= 12= -2
            echo $x; echo "<br>"; echo "<hr>";

        // dengan nama menggunakan Assignment
            echo "<h3>7. Sama seperti no.6 pada no.7 menggunakan huruf dengan kasus membuat jarak antar nama</h3>";
            $nama = "Bagas";
            $nama .= " ";
            $nama .= "Mulya";
            echo $nama; echo "<br>"; echo "<hr>";

    //Perbandingan
        // <, >, <=, >=, ==, !=
            echo "<h3>8. Operator Perbandingan</h3>";
            var_dump(1 == "1"); echo "Mengapa 1 == string 1 bisa true dikarenakan operator perbandingan biasa tidak memperdulikan tipe data, hanya memperdulikan nilai."; echo "<br>";

            var_dump(1 > 5); echo "1>5 1 tidak lebih besar dri 5 maka jawabannya false/salah"; echo "<br>"; echo "<hr>";

    // identitas
        // ===, !===
        echo "<h3>9. Operator Identitas</h3>";
        var_dump(1 === "1"); echo "dengan menggunakan operator identitas yg tdnya 1 == string 1 benar karna tidak memperdulikan tipe data, beda halnya dengan menggunakan operator identitas yg dimana berfungsi untuk mengetahui lebih rinci contohnya 1(nilai) === 1(string), karna string merupakan tipe data bukan nilai maka jawabannya salah/false" ; echo "<br>"; echo "<hr>";

    // logika
        // &&, ||, !
        echo "<h3>10. Operator Logika</h3>";
        $a = "10";
        var_dump($a < 20 && $a % 2 == 0); echo "mengapa hasil dari 10 < 20 && 10 % 2 == 0 bisa true karna menggunakan logika and/&& yg dimana kedua kondisi harus true jika salah satu kondisi salah maka hasilnya false";
        echo "<p>akan tetapi jika memakai or/|| jika salah satu kondisi true dan satu kondisi lagi false maka hasilnya tetap benar karna akan memilih true</p>"; 
        echo "<hr>";
?>

<!-- php dalam html -->
<?php
$nama2 = "Bagas";
$nama1 = "Mulya";
?>
<html lang="en">
<head>
    <title>Pertemuan01</title>
</head>
<body>
    <h1>PHP dalam Html</h1>
    <h2>Selamat Datang Kembali <?php echo $nama2 . " " . $nama1 ?></h2>
    <p>echo $nama2 . " " . $nama1</p>
</body>
</html>