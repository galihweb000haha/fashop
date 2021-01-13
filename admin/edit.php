<?php

// INCLUDE KONEKSI KE DATABASE
require '../koneksi.php';
if(!isset($_SESSION['login'])){
	echo "<h1>Ett..!</h1>";
	echo "<a href='../index.php'>Kembali</a>";
	exit;
}


if (isset($_POST['update'])) {

	// AMBIL ID DATA
	$id = mysqli_real_escape_string($mysqli, $_POST['id']);

	

	// AMBIL NAMA FILE FOTO SEBELUMNYA
	$data = mysqli_query($mysqli, "SELECT gambar FROM barang WHERE id='$id'");
	$dataImage = mysqli_fetch_assoc($data);
	$oldImage = $dataImage['gambar'];

	// AMBIL DATA DATA DIDALAM INPUT
	$nama = mysqli_real_escape_string($mysqli, $_POST['nama']);
	$kategori = mysqli_real_escape_string($mysqli, $_POST['kategori']);
    $brand = mysqli_real_escape_string($mysqli, $_POST['brand']);
    $harga = mysqli_real_escape_string($mysqli, $_POST['harga']);
	$filename = $_FILES['newImage']['name'];
    $deskripsi = mysqli_real_escape_string($mysqli, $_POST['deskripsi']);

	
	// CEK DATA TIDAK BOLEH KOSONG
	if (empty($nama) || empty($kategori) || empty($harga)) {

		if (empty($nama)) {
			echo "<font color='red'>Kolom Nama tidak boleh kosong.</font><br/>";
		}

		if (empty($kategori)) {
			echo "<font color='red'>Kolom Kategori tidak boleh kosong.</font><br/>";
		}

		if (empty($harga)) {
			echo "<font color='red'>Kolom Harga tidak boleh kosong.</font><br/>";
		}
	} else {

		// JIKA FOTO DI GANTI
		if (!empty($filename)) {
			$filetmpname = $_FILES['newImage']['tmp_name'];
			$folder = "../upload/products/";			

			// GAMBAR LAMA DI DELETE
			unlink($folder . $oldImage) or die("GAGAL");

			// GAMBAR BARU DI MASUKAN KE FOLDER
			move_uploaded_file($filetmpname, $folder . $filename);
			// NAMA FILE FOTO + DATA YANG DI GANTIBARU DIMASUKAN
			$result = mysqli_query($mysqli, "UPDATE barang SET nama='$nama',kategori=$kategori,brand=$brand, harga='$harga', gambar='$filename', deskripsi='$deskripsi' WHERE id=$id");
		}

		// MEMASUKAN DATA YANG DI UPDATE KECUALI GAMBAR
		$result = mysqli_query($mysqli, "UPDATE barang SET nama='$nama',kategori='$kategori',brand='$brand',harga='$harga', deskripsi='$deskripsi' WHERE id=$id");
        
		// REDIRECT KE HALAMAN INDEX.PHP
		header("Location: index.php");
	}
}
?>
<?php
// AMBIL ID DARI URL
$id = $_GET['id'];

// AMBIL KATEGORI DAN BRAND
$data_kategori = mysqli_query($mysqli, "SELECT * FROM kategori");
$data_brand = mysqli_query($mysqli, "SELECT * FROM brand");

// AMBIL DATA BERDASARKAN ID
$result = mysqli_query($mysqli, "SELECT * FROM barang WHERE id=$id");

while ($res = mysqli_fetch_array($result)) {
	$nama = $res['nama'];
	$kategori = $res['kategori'];
    $brand = $res['brand'];
    $harga = $res['harga'];
	$image = $res['gambar'];
}
?>
<html>

<head>
	<title>Edit Data</title>
</head>

<body>
	<center>
		<a href="index.php">Home</a>
		<br /><br />

		<form name="form1" method="post" action="edit.php" enctype="multipart/form-data">
			<table border="0">
				<tr>
					<td>Nama</td>
					<td><input type="text" name="nama" value="<?php echo $nama; ?>"></td>
				</tr>
				<tr>
					<td>Kategori</td>
					<td>
						<select name="kategori" id="kategori">
							<?php while($data = mysqli_fetch_assoc($data_kategori)) : ?>
								<?php if($data['id'] == $kategori) : ?>
									<option selected value="<?=$data['id']?>"><?=$data['kategori']?></option>
								<?php else : ?>
									<option value="<?=$data['id']?>"><?=$data['kategori']?></option>									
								<?php endif; ?>
							<?php endwhile; ?>
						</select>
					</td>
				</tr>
				<tr>
					<td>Brand</td>
					<td>
						<select name="brand" id="brand">
							<?php while($data = mysqli_fetch_assoc($data_brand)) : ?>
								<?php if($data['id'] == $brand) : ?>
									<option selected value="<?=$data['id']?>"><?=$data['brand']?></option>
								<?php else : ?>
									<option value="<?=$data['id']?>"><?=$data['brand']?></option>									
								<?php endif; ?>
							<?php endwhile; ?>
						</select>
					</td>
                </tr>
                <tr>
					<td>Harga</td>
					<td><input type="text" name="harga" value="<?php echo $harga; ?>"></td>
				</tr>
				<tr>
					<td>Gambar</td>
					<td><img width="80" src="../upload/products/<?php echo $image ?>"></td>
					<td><input type="file" name="newImage"></td>
				</tr>
				<tr>
					<td><input type="hidden" name="id" value=<?php echo $_GET['id']; ?>></td>
					<td><input type="submit" name="update" value="Update"></td>
				</tr>
			</table>
		</form>
	</center>
</body>

</html>
