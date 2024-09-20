<?php
include "./koneksi.php";

$nama = $_POST['nama'];
$umur = $_POST['umur'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$telp = $_POST['telp'];
$alamat = $_POST['alamat'];

mysqli_query(mysql:$koneksi, query:"INSERT INTO peserta(`nama`, `umur`, `jenis_kelamin`, `telp`, `alamat`) VALUES ('$nama', '$umur', '$jenis_kelamin', '$telp', '$alamat')");

header(header: "location:index.php");
?>