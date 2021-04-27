<?php
include 'koneksi2.php';

// menyimpan data kedalam variabel
$nama            = $_POST['nama'];
$jenis_kelamin   = $_POST['jenis_kelamin'];
$email           = $_POST['email'];
$alamat          = $_POST['alamat'];
$kota            = $_POST['kota'];
$pesan           = $_POST['pesan'];

//query SQL untuk insert data
$sql = "INSERT INTO data_diri SET nama='$nama', jenis_kelamin='$jenis_kelamin', email='$email',
      alamat='$alamat', kota='$kota', pesan='$pesan'";

mysqli_query($koneksi, $sql);

// mengalihkan ke halaman phpform.php
header ("location: tampilkontak.php")
?>