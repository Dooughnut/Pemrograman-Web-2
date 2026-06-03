<?php
function getKoneksi() {
    $host = "localhost";
    $username = "root";
    $password = ""; 
    $database = "peminjaman_buku";

    $koneksi = new mysqli($host, $username, $password, $database);

    if ($koneksi->connect_error) {
        die("Koneksi database gagal: " . $koneksi->connect_error);
    }

    return $koneksi;
}
?>