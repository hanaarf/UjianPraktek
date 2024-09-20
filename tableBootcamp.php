<?php
include "./koneksi.php";
$create = "CREATE TABLE bootcamp (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nomor_bootcamp int,
    nama_peserta varchar(200),
    nama_bootcamp varchar(200),
    jadwal_kelas enum('pagi','siang'),
    telp int
)";

if($koneksi->query(query: $create) === true) {
    echo "tabel berhasil dibuat";
}else {
    echo "gagal membuat table";
}

// buat matiin koneksi dikoneksi.php
$koneksi->close();
?>
