<!DOCTYPE html>
<html>
  <h2>List Mahasiswa</h2>
  <table border="1">
    <tr>
    <th>ID</th>
    <th>NAMA</th>
    <th>JENIS KELAMIN</th>
    <th>EMAIL</th>
    <th>ALAMAT</th>
    <th>KOTA</th>
    <th>PESAN</th>
    </tr>
  <?php
  include 'koneksi2.php';
  $sql = mysqli_query($koneksi, "SELECT * FROM data_diri");
  $no = 1;
  foreach ($sql as $row) {
    $jenis_kelamin = $row['jenis_kelamin']=='L'?'Laki-Laki':'Perempuan';
    echo "<tr>
    <td>$no</td>
    <td>".$row['nama']."</td>
    <td>".$jenis_kelamin."</td>
    <td>".$row['email']."</td>
    <td>".$row['alamat']."</td>
    <td>".$row['kota']."</td>
    <td>".$row['pesan']."</td>
    </tr>";
    $no++;
  }
?>
<a href="logout.php">LOGOUT</a>
</table>
</html>