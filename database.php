<?php

include "./koneksi.php";

$database = 'db_ujian';
$create = "CREATE DATABASE $database";

if ($koneksi->query(query: $create) === true){
    echo "Database $database berhasil dibuat";
}else{
    echo "gagal membuat database";
}

$koneksi->close();
?>