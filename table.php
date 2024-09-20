<?php
include "./koneksi.php";
$create = "CREATE TABLE peserta (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama varchar(255),
    umur int,
    jenis_kelamin enum('l','p'),
    telp int,
    alamat varchar(200)
)";

if($koneksi->query(query: $create) === true) {
    echo "tabel berhasil dibuat";
}else {
    echo "gagal membuat table";
}

// buat matiin koneksi dikoneksi.php
$koneksi->close();
?>