<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi</title>
</head>
<body>
    
</body>
</html>
<?php

include_once "koneksi.php";
if (isset($_POST['daftar'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $namadepan = $_POST['namadepan'];
    $namabelakang = $_POST['namabelakang'];
    $email = $_POST['email'];
    $sql="INSERT INTO registrasi (username, password, namadepan, namabelakang, email)
    VAlUES ('$username','$password','$namadepan','$namabelakang','$email')";
    
    if (mysqli_query($conn, $sql)){
        echo"Data berhasil diinput ";
    }else{
    echo"Data tidak bisa diinput";
    }

    echo $username;
    echo"<br>";
    echo $email;
    echo"<br>";
    echo $namadepan." ".$namabelakang;
}
    else{
        echo "mohon maaf anda belum terdaftar";
    }
?>