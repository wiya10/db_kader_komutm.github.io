<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "data_kader");
function query($query)
{
    global $conn;
    $nilai = mysqli_query($conn, $query);
    $mahasiswa = [];
    while ($mhs = mysqli_fetch_assoc($nilai)) {
        $mahasiswa[] = $mhs;
    }
    return $mahasiswa;
}

function tambah($data)
{
    global $conn;

    $nama = htmlspecialchars($data["nama"]);
    $tahun_lk = htmlspecialchars($data["tahun_lk"]);
    $jk = htmlspecialchars($data["jk"]);

    $query = "INSERT INTO datakader VALUES
    ('', '$nama', '$tahun_lk', '$jk')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    global $conn;

    mysqli_query($conn, "DELETE FROM datakader WHERE id =$id");

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    global $conn;

    $id =  $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $tahun_lk = htmlspecialchars($data["tahun_lk"]);
    $jk = htmlspecialchars($data["jk"]);

    $query = "UPDATE datakader SET 
                nama = '$nama', 
                tahun_lk = '$tahun_lk',
                jk = '$jk'
                WHERE id = $id
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
function cari($keyword){
    $query =  "SELECT * FROM datakader 
                WHERE 
                nama LIKE '%$keyword%' OR 
                tahun_lk LIKE '%$keyword%' 
            ";

    return query($query);
}