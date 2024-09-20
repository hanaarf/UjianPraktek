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
    <form action="./create.php" method="post">
        <label>Nama :</label>
        <br>
        <input type="text" name="nama">
        <br><br>

        <label>umur :</label>
        <br>
        <input type="int" name="umur">
        <br><br>

        <label>jenis kelamin :</label>
        <br>
        <input type="text" name="jenis_kelamin"><br>

        <label>No Telp :</label>
        <br>
        <input type="number" name="telp">
        <br><br>

        <label>Alamat :</label>
        <br>
        <textarea name="alamat"></textarea>
        <br><br>

        <label>nomor bootcamp :</label>
        <br>
        <input type="int" name="nomor_bootcamp">
        <br><br>

        <label>nama bootcamp :</label>
        <br>
        <input type="text" name="nama_bootcamp">
        <br><br>

        <label>jadwal kelas : </label>
        <br>
        <input type="text" name="jadwal_kelas"><br>


        <button type="submit" class="submit">Simpan Data</button>
    </form>
</body>

</html>