<?php
include './koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran  bootcamp</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 8px;
        }

        thead {
            background-color: pink;
        }
        .kuning{
            background-color: khaki;
            text-align: end;
        }
        .edit{
            padding: 8px 16px;
            background-color: grey;
            border-radius: 10px;
            color: white;
        }
        .hapus{
            padding: 8px 16px;
            background-color: pink;
            border-radius: 10px;
            color: white;
        }
        .detail{
            padding: 8px 16px;
            background-color: green;
            border-radius: 10px;
            color: white;
        }
        table{
            margin: auto;
            width: 80%;
        }
    </style>
</head>

<body>
    <h1 style="text-align: center; font-weight: 600;">Data Hanya yang kelas siang</h1><br><br>

    <table>
        <thead>
            <tr>
                <th width="5%">No.</th>
                <th>nomor bootcamp</th>
                <th>nama peserta</th>
                <th>nama bootcamp</th>
                <th>jadwal kelas</th>
                <th>no telp</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $data = mysqli_query($koneksi, "SELECT * FROM bootcamp WHERE jadwal_kelas = 'siang'");
            while($peserta = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php print $peserta['id'] ?></td>
                <td><?php print $peserta['nomor_bootcamp'] ?></td>
                <td><?php print $peserta['nama_peserta'] ?></td>
                <td><?php print $peserta['nama_bootcamp'] ?></td>
                <td><?php print $peserta['jadwal_kelas'] ?></td>
                <td><?php print $peserta['telp'] ?></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>

</html>