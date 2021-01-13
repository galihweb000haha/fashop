<?php
require '../koneksi.php';
// require 'func.php';


$username = mysqli_real_escape_string($mysqli, $_POST['username']);
$password = mysqli_real_escape_string($mysqli, $_POST['password']);

$result = mysqli_query($mysqli, "SELECT * FROM user WHERE username = '$username' AND password = '$password'");

echo mysqli_num_rows($result) ? loginValid($result) : loginNotValid();


function loginValid($userdata){
    createSession($userdata);
}

function loginNotValid(){
    header('Location: ../index.php?error=1');
    exit;
}

function createSession($userdata){    
    $user = mysqli_fetch_assoc($userdata);

    $_SESSION['login'] = TRUE;    

    $user['role'] ? header('Location: ../admin/index.php') : header('Location: ../index.php?feedback=1');
    
}