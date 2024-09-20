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
    <h1 style="text-align: center; font-weight: 600;">Data Hanya yang Laki Laki</h1><br><br>

    <table>
        <thead>
            <tr class="kuning">
                <td colspan="5">
                    <a href="./dataLaki.php">data laki laki</a>
                </td>
                <td>
                    <a href="./dataCewe.php">data perempuan</a>
                </td>
                <td>
                    <a href="./formTambah.php">tambahkan data</a>
                </td>
            </tr>
            <tr>
                <th width="5%">No.</th>
                <th>Nama Lengkap</th>
                <th>Umur</th>
                <th>Jenis Kelamin</th>
                <th>Nomor Telepon</th>
                <th>Alamat</th>
                <th>Option</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $data = mysqli_query($koneksi, "SELECT * FROM peserta ");
            while($peserta = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php print $peserta['id'] ?></td>
                <td><?php print $peserta['nama'] ?></td>
                <td><?php print $peserta['umur'] ?></td>
                <td><?php print $peserta['jenis_kelamin'] ?></td>
                <td><?php print $peserta['telp'] ?></td>
                <td><?php print $peserta['alamat'] ?></td>
                <td>
                    <a href="formEdit.php?id=<?php print $peserta['id'] ?>" class="edit">Edit</a>
                    <a href="hapus.php?id=<?php print $peserta['id'] ?>"
                        onclick="return confirm('yakin mau hapus data?')" class="hapus">Hapus</a>
                    <a href="detail.php" class="detail">Detail</a>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>

</html>