<?php

function cekLogin(){
    if(!isset($_SESSION['login'])){
        echo "<h1>Ett..!</h1>";
        echo "<a href='../index.php'>Kembali</a>";
        exit;
    }
}