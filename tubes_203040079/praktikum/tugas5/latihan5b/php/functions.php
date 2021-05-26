<?php 

function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "pw_tubes_203040079");

    return $conn;
}


function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    $conn = koneksi();

    $gambar = htmlspecialchars($data['gambar']);
    $nama = htmlspecialchars($data['nama']);
    $deskripsi = htmlspecialchars($data['deskripsi']);
    $harga = htmlspecialchars($data['harga']);
    $kategori = htmlspecialchars($data['kategori']);

    $query = "INSERT INTO sepakbola
                    VALUES
                    ('', '$gambar', '$nama', '$deskripsi', '$harga', '$kategori')";
    
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


?>