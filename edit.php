<?php
require 'functions.php';

$id = $_GET["id"];

$mhs = query("SELECT * FROM datakader WHERE id = $id")[0];


// Cek apakah tombol submit bisa ditekan atau belum
if (isset($_POST["submit"])) {
    //cek apakah data berhasil diubah atau tidak
    if (ubah($_POST) > 0) {
        echo "<script>
        alert('Data berhasil diubah');
        document.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>
        alert('Data gagal diubah');
        document.location.href = 'index.php';
        </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Kader</title>
</head>

<body>
    <h1>Edit Data Kader</h1>
    <form action="" method="post">
        <table>
        <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
            <tr>
                <td><label for="nama">Nama</label></td>
                <td>:</td>
                <td><input type="text" name="nama" id="nama" required value="<?= $mhs["nama"]; ?>"></td>
            </tr>
            <tr>
                <td><label for="tahun_lk">Tahun LK</label></td>
                <td>:</td>
                <td><select name="tahun_lk" id="tahun_lk" required>
                        <option value="">--Pilih--</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="-">-</option>
                    </select></td>
            </tr>
            <tr>
                <td><label for="jk">Jenis Kelamin</label></td>
                <td>:</td>
                <td>
                    <input type="radio" name="jk" id="jk" value="L" required> Laki-laki
                    <input type="radio" name="jk" id="jk" value="P" required> Perempuan
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" value="Ubah Data"></td>
            </tr>
        </table>
    </form>
</body>

</html>