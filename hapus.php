<?php
include './koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi, "SET FOREIGN_KEY_CHECKS=0");
mysqli_query($koneksi, "DELETE FROM peserta where id='$id'");
mysqli_query($koneksi, "SET FOREIGN_KEY_CHECKS=1");
header("location:index.php");
?>