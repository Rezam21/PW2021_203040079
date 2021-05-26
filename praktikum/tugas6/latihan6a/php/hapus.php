<?php 
require 'functions.php';
$id = $_GET['id'];

if (hapus($id) > 0) {
    echo "<script>
                alert('Data Berhasil dihapus!');
                documents.location.href = 'admin.php';
        </script>";
} else { 
    echo "<script>
                alert('Data Gagal dihapus!');
                documents.location.href = 'admin.php';
        </script>";
}


?>