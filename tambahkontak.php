<!DOCTYPE html>
<html>
  <head>
    <title>FORM TAMBAH KONTAK</title>
    <style type="text/css">
    body {
      background-color: whitesmoke;
      color: black;
    }
    table{
      background: transparent;
      text-align: left;
      padding: 30px 35px
    }
    h2{
      background-color: lightgreen;
      padding: 30px 35px;
      text-align: center;
      color: blue;
    }
    button {
      background-color: yellow;
    }
    </style>
  </head>
  <body>
  <h2>FORM TAMBAH KONTAK</h2>
  <form action="simpankontak.php" method="post">
  <table cellpadding="2">
    <tr>
      <td>NAMA</td>
      <td><input type="text" name="nama"></td>
    </tr>
    <tr>
    <td>JENIS KELAMIN</td>
      <td>
        <input type="radio" name="jenis_kelamin" value="L">Laki-Laki
        <input type="radio" name="jenis_kelamin" value="P">Perempuan
      </td>
    </tr>
    <tr>
      <td>EMAIL</td>
      <td><input type="text" name="email"></td>
    </tr>
    <tr>
      <td>ALAMAT</td>
      <td><input type="text" name="alamat"></td>
    </tr>
    <tr>
      <td>KOTA</td>
      <td><input type="text" name="kota"></td>
    </tr>
    <tr>
      <td>PESAN</td>
      <td><input type="text" name="pesan"></td>
    </tr>
    <tr>
      <td></td>
      <td><button type="submit" value="simpan">SIMPAN</button></td>
    </tr>
  </table>
  </form>
  </body>
</html>