<?php

$servername = "localhost";
$databases = "pwd_2441919062";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $databases);

if(!$conn){
    die("koneksi gagal: ". mysqli_connect_error ());
}

echo "koneksi berhasil";
mysqli_close($conn);

?>