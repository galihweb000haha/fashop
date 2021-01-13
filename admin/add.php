
<html>

<head>
	<title>Tambah Data</title>
</head>

<body>
	<?php
	// INCLUDE KONEKSI KE DATABASE
	require '../koneksi.php';
	if(!isset($_SESSION['login'])){
		echo "<h1>Ett..!</h1>";
		echo "<a href='../index.php'>Kembali</a>";
		exit;
	}

	if (isset($_POST['Submit'])) {
		$nama = mysqli_real_escape_string($mysqli, $_POST['nama']);
		$kategori = mysqli_real_escape_string($mysqli, $_POST['kategori']);
        $brand = mysqli_real_escape_string($mysqli, $_POST['brand']);
        $harga = mysqli_real_escape_string($mysqli, $_POST['harga']);
		$filename = $_FILES['gambar']['name'];
        $deskripsi = mysqli_real_escape_string($mysqli, $_POST['deskripsi']);


		// CEK DATA TIDAK BOLEH KOSONG
		if (empty($nama) || empty($kategori) || empty($harga) || empty($filename)) {

			if (empty($nama)) {
				echo "<font color='red'>Kolom Nama tidak boleh kosong.</font><br/>";
			}

			if (empty($kategori)) {
				echo "<font color='red'>Kolom Kategori tidak boleh kosong.</font><br/>";
			}

			if (empty($harga)) {
				echo "<font color='red'>Kolom Harga tidak boleh kosong.</font><br/>";
			}

			if (empty($filename)) {
				echo "<font color='red'>Kolom Gambar tidak boleh kosong.</font><br/>";
			}

			// KEMBALI KE HALAMAN SEBELUMNYA
			echo "<br/><a href='javascript:self.history.back();'>Kembali</a>";
		} else {
			// JIKA SEMUANYA TIDAK KOSONG
			$filetmpname = $_FILES['gambar']['tmp_name'];

			// FOLDER DIMANA GAMBAR AKAN DI SIMPAN
			$folder = '../upload/products/';
			// GAMBAR DI SIMPAN KE DALAM FOLDER
			move_uploaded_file($filetmpname, $folder . $filename);

			// MEMASUKAN DATA DATA + NAMA GAMBAR KE DALAM DATABASE
			$result = mysqli_query($mysqli, "INSERT INTO barang VALUES('', '$nama', '$kategori', '$brand', '$harga' ,'$filename', '$deskripri')");

			// MENAMPILKAN PESAN BERHASIL
			echo "<font color='green'>Data Berhasil ditambahkan.";
			echo "<br/><a href='index.php'>Lihat Hasilnya</a>";
		}
	}
	?>
</body>

</html>
