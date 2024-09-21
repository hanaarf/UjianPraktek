<?php
include "./koneksi.php";
$create = "CREATE TABLE bootcamp (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nomor_bootcamp int,
    id_peserta int,
    FOREIGN KEY (id_peserta) references peserta(id),
    nama_bootcamp varchar(200),
    jadwal_kelas enum('pagi','siang')
)";

if($koneksi->query(query: $create) === true) {
    echo "tabel berhasil dibuat";
}else {
    echo "gagal membuat table";
}

// buat matiin koneksi dikoneksi.php
$koneksi->close();
?>
