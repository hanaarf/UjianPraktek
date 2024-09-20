<?php
    include './koneksi.php';
    $id = $_GET['id'];
    $data = mysqli_query($koneksi, "SELECT * FROM peserta WHERE id='$id'");
    while ($peserta = mysqli_fetch_array(result: $data)){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1 {
            text-align: center;
            margin-bottom: 40px;
        }

        form {
            border: 2px solid black;
            padding: 8px 16px;
            margin: auto;
            width: 40%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        form input,
        textarea {
            width: 90%;
        }
        .submit{
            padding: 8px 16px;
            background-color: grey;
            border-radius: 10px;
            color: white;
        }
    </style>
</head>
<body>
    <h1>Form Pendaftaran Bootcamp</h1>
    <form action="./edit.php" method="post">
        <input type="hidden" name="id" value="<?php print $peserta['id'] ?>">

        <label>Nama :</label>
        <br>
        <input type="text" name="nama" value="<?php print $peserta['nama'] ?>">
        <br><br>

        <label>umur :</label>
        <br>
        <input type="int" name="umur" value="<?php print $peserta['umur'] ?>">
        <br><br>

        <label>jenis kelamin :</label>
        <br>
        <input type="text" name="jenis_kelamin" value="<?php print $peserta['jenis_kelamin'] ?>"><br>

        <label>No Telp :</label>
        <br>
        <input type="number" name="telp" value="<?php print $peserta['telp'] ?>">
        <br><br>

        <label>Alamat :</label>
        <br>
        <textarea name="alamat"><?php print $peserta['alamat'] ?></textarea>
        <br><br>
        
        <button type="submit">Simpan Data</button>
    </form>
</body>
</html>
<?php
    }
?>

