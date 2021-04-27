<?php
session_start();
include 'koneksi2.php';

// menyimpan data ke dalam variabel
$username   = $_POST['username'];
$password   = $_POST['password'];

// query SQL untuk memilih data
$sql = "SELECT * FROM cek_admin WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($koneksi, $sql);

if (mysqli_num_rows($result)>0) {
  $_SESSION['username'] = $username;
  $_SESSION['status'] = "login";

  // mengalihkan ke halaman tampilkontak.php
  header("location: tampilkontak.php");
} else {
  echo "<h2> Login Gagal </h2>";
}

?>