<?php

// INCLUDE KONEKSI KE DATABASE
require '../koneksi.php';
if(!isset($_SESSION['login'])){
	echo "<h1>Ett..!</h1>";
	echo "<a href='../index.php'>Kembali</a>";
	exit;
}
// AMBIL DATA DARI DATABASE BERDASARKAN DATA TERAKHIR DI INPUT
$result = mysqli_query(
	
	$mysqli, "SELECT barang.*,
	kategori.kategori AS nama_kategori,
	brand.brand AS nama_brand
	FROM barang
	JOIN kategori ON kategori.id = barang.kategori
	JOIN brand ON brand.id = barang.brand
	ORDER BY id DESC"
);
?>

<html>

<head>
	<title>Homepage</title>
</head>

<body>
	<div style="width:80%;margin:auto">
		<h2>Data Barang</h2>
		<a href="formAdd.php">Tambah Data Baru</a><br /><br />
	</div>
	
	<center>		
		<table width='80%' border=0>

			<tr bgcolor='#CCCCCC'>
				<td align="center">Nama</td>
				<td align="center">Kategori</td>
				<td align="center">Brand</td>
				<td align="center">Harga</td>
				<td align="center">Gambar</td>
				<td align="center">Aksi</td>
			</tr>
			<?php

			while ($res = mysqli_fetch_array($result)) {
				echo "<tr>";
				echo "<td>" . $res['nama'] . "</td>";
				echo "<td>" . $res['nama_kategori'] . "</td>";
                echo "<td>" . $res['nama_brand'] . "</td>";
                echo "<td>" . $res['harga'] . "</td>";
				echo "<td><img width='80' src='../upload/products/" . $res['gambar'] . "'</td>";
				echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Kamu yakin untuk delete ini?')\">Delete</a></td>";
			}
			?>
		</table>
	</center>
	<div style="width:80%;margin:auto">
		<a href="logout.php">Keluar</a><br /><br />
	</div>
</body>

</html>
