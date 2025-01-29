<?php 
//mengkoneksikan ke dalam database buku
$conn = mysqli_connect("localhost", "root", "", "buku");


//membuat fungsi query untuk mengambil data dari tbl detail_buku
function query($query) {
    //membuat var konek global untuk mengkoneksikan diluar function
    global $conn;
    //mengambil semua data structure dari tbl-detail buku
    $result = mysqli_query($conn, $query);
    //wadah untuk menampung data
    $rows = [];
    //pengulangan untuk mengambil semua data dari obj result
    while ($row = mysqli_fetch_assoc($result)) {
        //analoginya seperti mengambil baju dri lemari ke dalam wadah(kotak) ambil baju taro kotak dan begitu seterusny atau bisa disebut menambah array di akhir elemen
        $rows[] = $row;
    }
    //mengembalikan wadahnya
    return $rows;
}

function tambah($data) {
    global $conn;
    //ambil data dari tiap elemen dalam form
    //function argument parameter contohnya($nama sbg function, data sbg argument,  kutip nama sbg parameter)
    $nama = htmlspecialchars($data["nama"]);
    $penulis = htmlspecialchars($data["penulis"]);
    $nsb = htmlspecialchars($data["nsb"]);
    
    $gambar = upload();
    if ( !$gambar ) {
        return false;
    }

    //query insert data
    $query = "INSERT INTO detail_buku
                VALUES
                ('', '$nama', '$penulis', '$nsb', '$gambar')
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upload () {
    
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFIle = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    //cek apakah tidak ada gambar yang diupload
    if ( $error === 4 ) {
        echo "<script> alert('Pilih gambar terlebih dahulu') <script>";
        return false;
    }

    //cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if ( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
        echo "<script> alert('Yang anda upload bukan gambar') <script>";
        return false;
    }

    //cek jika size file terlalu besar
    if ( $ukuranFIle > 5000000 ) {
        echo "<script> alert('Ukuran file terlalu besar') <script>";
        return false;
    }

    //setelah lolos 3pengecekan(gambar yang diupload, yg diupload sbgi gmbar, ukuran gambar) gambar siap diupload
    //membuat nama baru agar tidak ada nama file yang sama
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    
    move_uploaded_file($tmpName, 'img/tmp/' . $namaFileBaru);


    return $namaFileBaru;
}

function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM detail_buku WHERE idBuku = $id");

    return mysqli_affected_rows($conn);
}

function ubahData($data) {
    global $conn;

    //ambil data dari tiap elemen dalam form
    //function argument parameter contohnya($nama sbg function, data sbg argument,  kutip nama sbg parameter)
    $id = $data["idBuku"];
    $nama = htmlspecialchars($data["nama"]);
    $penulis = htmlspecialchars($data["penulis"]);
    $nsb = htmlspecialchars($data["nsb"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);

    //cek apakah user mengganti gambar atau tidak
    if ( $_FILES['gambar']['error'] === 4 ) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }

    //query ubah data
    $query = "UPDATE detail_buku SET namabk = '$nama', penulisbk = '$penulis', nsb = '$nsb', gambarbk = '$gambar' WHERE idBuku = $id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

//function cari
function cari($keyword){
    global $conn;

    $query = "SELECT * FROM detail_buku WHERE namabk LIKE '%$keyword%' OR penulisbk LIKE '%$keyword%' OR nsb LIKE '%$keyword%'";

    return query($query);
}

//function registrasi pda regis.php
function registrasi($data) {
    global $conn;

    //mengambil data dari post regis
    $email = strtolower(stripslashes($data["email"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    //cek apakah user sudah terdaftar atau belum
    $result = mysqli_query($conn, "SELECT email FROM user WHERE email = '$email'");
    if (mysqli_fetch_assoc($result)) {
        echo "
            <script>
                alert('Username Telah terdaftar');
            </script>
        ";
        return false;
    }

    //cek konfirmasi password
    if ( $password !== $password2 ) {
        echo "
            <script>
                alert('password yang dimasukan tidak sama');
            </script>
        ";
        return false;
    }

    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //memasukan data ke dalam database
    $query = "INSERT INTO user VALUES ('', '$email', '$password')";
    mysqli_query($conn, $query);
    
    return mysqli_affected_rows($conn);
}



//ambil data(fetch) buku dari object result(mengambil semua data array pada tbl detail-buku)
// $bk = mysqli_fetch_row($result); //mengembalikan array numerik seperti [0][1][2]
// $bk =mysqli_fetch_assoc($result); //mengembalikan array associative(key/index yang telah diubah kedalam bentuk nama) seperti ["nama"]["nim"]
// $bk mysqli_fetch_array($result); //mengembalikan keduanya numerik dan associative
// $bk mysqli_fetch_object($result); //mengembalikan dengan object seperti($bk -> nama/nim)

?>