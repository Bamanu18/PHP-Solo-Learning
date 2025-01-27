<?php 
require 'functions.php';

//mengambil data id dari url
$id = $_GET["idBuku"];

//membuat logika hapus data
if ( hapus($id) > 0 ) {
    echo "
            <script>
                alert('Data berhasil dihapus!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal dihapus!');
                document.location.href = 'index.php';
            </script>
        ";
}


?>