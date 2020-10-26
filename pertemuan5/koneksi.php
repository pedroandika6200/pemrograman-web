<?php
$namaServer = "localhost";
$username = "root";
$password ="";
$namaDB = "weblanjut";

//Membuat koneksi
$conn = mysqli_connect($namaServer, $username, $password, $namaDB);

//check koneksi
if(!$conn){
    die("koneksi gagal");
}

?>