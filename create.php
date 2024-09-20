<?php
include "./koneksi.php";

$nama = $_POST['nama'];
$umur = $_POST['umur'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$telp = $_POST['telp'];
$alamat = $_POST['alamat'];
$nomor_bootcamp = $_POST['nomor_bootcamp'];
$nama_bootcamp = $_POST['nama_bootcamp'];
$jadwal_kelas = $_POST['jadwal_kelas'];

mysqli_query(mysql:$koneksi, query:"INSERT INTO peserta(`nama`, `umur`, `jenis_kelamin`, `telp`, `alamat`, `nomor_bootcamp`, `nama_bootcamp`, `jadwal_kelas`) VALUES ('$nama', '$umur', '$jenis_kelamin', '$telp', '$alamat', '$nomor_bootcamp', '$nama_bootcamp', '$jadwal_kelas')");

header(header: "location:index.php");
?>