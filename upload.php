<?php
include "koneksi.php";

// Ambil data dari form
$nama_tanaman = $_POST['nama_tanaman'];
$foto = $_FILES['foto']['name'];
$file_tmp = $_FILES['foto']['tmp_name'];

// Cek apakah file sudah ada di database
$query_check = "SELECT * FROM fitur WHERE foto = '$foto'";
$result_check = mysqli_query($koneksi, $query_check);

if (mysqli_num_rows($result_check) > 0) {
    // File sudah ada di database, tampilkan data
    $row = mysqli_fetch_assoc($result_check);
    echo "Data untuk file $foto sudah ada:<br>";
    echo "Nama Tanaman: " . $row['nama_tanaman'] . "<br>";
    echo "Foto: " . $row['foto'] . "<br>";
} else {
    // File belum ada di database, tambahkan data baru
    move_uploaded_file($file_tmp, 'file/' . $foto);

    $query_insert = "INSERT INTO fitur SET
                        nama_tanaman = '$nama_tanaman',
                        foto = '$foto'";
    mysqli_query($koneksi, $query_insert) or die("SQL Error" . mysqli_error());
    echo "Data baru berhasil ditambahkan.";
}

header('location:index.php');
?>
