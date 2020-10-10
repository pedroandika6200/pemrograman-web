<?php

if (isset($_POST['tombolsubmit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];

    if($username=="pedro" && $password=="123"){
        echo "Login Berhasil";
    }
    else{
        echo "Username/Password anda salah";
    }
}
else{
    echo"Mohon maaf cek login tidak bisa diakses langsung";
}
?>