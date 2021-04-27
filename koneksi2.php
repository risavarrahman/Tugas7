<?php
// konfigurasi database
$host = "localhost";
$username = "root";
$password = "";
$database = "pemweb7";

//perintah php untuk akses ke database
$koneksi = mysqli_connect($host, $username, $password, $database);


// mysqli_select_db($koneksi, $database) or die(mysqli_error());
?>