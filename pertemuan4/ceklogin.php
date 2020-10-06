<?php

if (isset($_POST['tombolsubmit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $namadpn=$_POST['namadpn'];
    $namablk=$_POST['namablk'];
    $email=$_POST['email'];

    if($username=="pedro" && $password=="123"){
        echo "Nama : ".$namadpn ." " .$namablk."<br>";
        echo "Email : ".$email;
    }
    else{
        echo "Username/Password anda salah";
    }
}
else{
    echo"Mohon maaf cek login tidak bisa diakses langsung";
}
?>