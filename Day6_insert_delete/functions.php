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
    $gambar = htmlspecialchars($data["gambar"]);

    //query insert data
    $query = "INSERT INTO detail_buku
                VALUES
                ('', '$nama', '$penulis', '$nsb', '$gambar')
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
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
    $gambar = htmlspecialchars($data["gambar"]);

    //query ubah data
    $query = "UPDATE detail_buku SET namabk = '$nama', penulisbk = '$penulis', nsb = '$nsb', gambarbk = '$gambar' WHERE idBuku = $id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}



//ambil data(fetch) buku dari object result(mengambil semua data array pada tbl detail-buku)
// $bk = mysqli_fetch_row($result); //mengembalikan array numerik seperti [0][1][2]
// $bk =mysqli_fetch_assoc($result); //mengembalikan array associative(key/index yang telah diubah kedalam bentuk nama) seperti ["nama"]["nim"]
// $bk mysqli_fetch_array($result); //mengembalikan keduanya numerik dan associative
// $bk mysqli_fetch_object($result); //mengembalikan dengan object seperti($bk -> nama/nim)

?>