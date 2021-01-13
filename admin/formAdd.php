<?php
  require '../koneksi.php';
  if(!isset($_SESSION['login'])){
    echo "<h1>Ett..!</h1>";
    echo "<a href='../index.php'>Kembali</a>";
    exit;
  }
?>
<html>
  <head>
    <title>Tambah Data</title>
  </head>

  <body>
    <a href="index.php">Home</a>
    <br /><br />

    <form
      action="add.php"
      method="post"
      name="form1"
      enctype="multipart/form-data"
    >
      <table width="25%" border="0">
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" /></td>
        </tr>
        <tr>
            <td>Kategori</td>
            <td><input type="text" name="kategori" /></td>
        </tr>
        <tr>
            <td>Brand</td>
            <td><input type="text" name="brand" /></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td><input type="text" name="harga" /></td>
        </tr>
        <tr>
            <td>Gambar</td>
            <td><input type="file" name="gambar" /></td>
        </tr>
        <tr>
          <td>Deskripsi Produk</td>
          <td><textarea name="deskripsi" id="" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="Submit" value="Add" /></td>
        </tr>
      </table>
    </form>
  </body>
</html>
