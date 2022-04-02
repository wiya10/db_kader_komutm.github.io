<?php 
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "data_kader");

// ambil data dari table datakader
$result = mysqli_query($conn, "SELECT * FROM datakader");

// while( $mhs = mysqli_fetch_assoc($result)) {
//     var_dump($mhs);
// }

// if (!$result){
//     echo mysqli_error($conn);
// }   //untuk memunculkan error
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Kader</h1>

    <table border="1" cellpaddin="10" cellspcing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Nama</th>
            <th>Tahun LK</th>
            <th>JK</th>
        </tr>

        <?php $i = 1;  ?>
        <?php while($row = mysqli_fetch_assoc($result)):
        ?>
        <tr>
            <td><?= $i?></td>
            <td>
                <a href="">Ubah</a>
                <a href="">Hapus</a>
            </td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["tahun_lk"]; ?></td>
            <td><?= $row["jk"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endwhile;  ?>
    </table>
</body>
</html>