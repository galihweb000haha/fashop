<?php

// INCLUDE KONEKSI KE DATABASE
require '../koneksi.php';
if(!isset($_SESSION['login'])){
	echo "<h1>Ett..!</h1>";
	echo "<a href='../index.php'>Kembali</a>";
	exit;
}

// AMBIL DATA ID DI URL
$id = $_GET['id'];

// AMBIL NAMA FILE FOTO SEBELUMNYA
$data = mysqli_query($mysqli, "SELECT gambar FROM barang WHERE id='$id'");
$dataImage = mysqli_fetch_assoc($data);
$oldImage = $dataImage['gambar'];

// DELETE GAMBAR LAMA
$link = "../upload/products/" . $oldImage;
unlink($link);

// DELETE DATA DARI TABLE
$result = mysqli_query($mysqli, "DELETE FROM barang WHERE id=$id");

// REDIRECT KE index.php
header("Location:index.php");
