<?php
//Koneksi ke database
$server   = "localhost";
$username = "root";
$password = "";
$database = "fashop_db";
  
$mysqli = new mysqli ($server, $username, $password, $database);
if (mysqli_connect_errno()) {
    echo 'Koneksi gagal dilakukan dengan alasan : '.mysqli_connect_error();
    exit();
    mysqli_close($mysqli);
} 
//Akhir Koneksi---------------------------------------------------------
?>