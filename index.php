<?php
//memanggil file lain
//require dan include
require 'functions.php';

$mahasiswa = query("SELECT * FROM datakader");

//tombol cari diklik
if(isset($_POST["cari"])){
    $mahasiswa = cari($_POST["keyword"]);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Kader Kom.UTM</title>
</head>

<body>
    <h1>DATA KADER HMI KOM.UTM</h1>
    <a href="tambah.php">Tambah Data Kader</a><br><br>

<form action="" method="post">

    <input type="text" name="keyword" size="40" autofocus placeholder="cari...." autocomplete="off">
    <button type="submit" name="cari"> Cari</button>

</form>
<br>
    <table border="1" cellpadding="10" cellspacin="0">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Tahun LK</th>
            <th>JK</th>
            <th>Aksi</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $mhs["nama"]; ?></td>
                <td><?= $mhs["tahun_lk"]; ?></td>
                <td><?= $mhs["jk"]; ?></td>
                <td>
                    <a href="edit.php?id=<?= $mhs["id"]; ?>">Edit</a> |
                    <a href="hapus.php?id=<?= $mhs["id"]; ?>" onclick="return confirm('Yakin Mau Hapus?');">Hapus</a>
                </td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>

</html>