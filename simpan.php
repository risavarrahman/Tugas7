<?php
include 'koneksi.php';

// menyimpan data kedalam variabel
$nim            = $_POST['nim'];
$nama           = $_POST['nama'];
$jurusan        = $_POST['jurusan'];
$jenis_kelamin  = $_POST['jenis_kelamin'];
$alamat         = $_POST['alamat'];

//query SQL untuk insert data
$sql = "INSERT INTO mahasiswa SET nim='$nim', nama='$nama', jurusan='$jurusan',
      jenis_kelamin='$jenis_kelamin', alamat='$alamat'";

// $sql = "INSERT INTO mahasiswa (nim, nama, jurusan, jenis_kelamin, alamat) VALUES 
//       ('$nim', '$nama', '$jurusan', '$jenis_kelamin', '$alamat')";

mysqli_query($koneksi, $sql);

// mengalihkan ke halaman phpform.php
// header ("location: phpform.php")
?>