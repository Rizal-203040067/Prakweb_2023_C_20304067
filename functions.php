<?php 

function koneksi(){
    //  koneksi ke MySQL & memilih DB
    $conn = mysqli_connect('localhost', 'root', '', 'pw') or die ('koneksi ke database GAGAL!');

    return $conn;
}

function query($query){
    $conn = koneksi();

    // query untuk mengambil seluruh isi dari tabel buku
    $result = mysqli_query($conn, $query) or die ('quesry GAGAL! ' . mysqli_error($conn));

    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}


?>