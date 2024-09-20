<?php
    include './koneksi.php';

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $telp = $_POST['telp'];
    $alamat = $_POST['alamat'];
    $nomor_bootcamp = $_POST['nomor_bootcamp'];
    $nama_bootcamp = $_POST['nama_bootcamp'];
    $jadwal_kelas = $_POST['jadwal_kelas'];

    $query = "UPDATE peserta SET nama='$nama', umur='$umur', jenis_kelamin='$jenis_kelamin', telp='$telp', alamat='$alamat', nomor_bootcamp='$nomor_bootcamp', nama_bootcamp='$nama_bootcamp', jadwal_kelas='$jadwal_kelas' WHERE id='$id'";

    $data = mysqli_query($koneksi, $query);

    header("location:index.php");
?>
