<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Anggota</title>
    <style>
        .inputan {
            width: 100px;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
        }
        input[type=submit] {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 16px 32px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
        }
        
    </style>
    <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" 
crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h2>Daftar Matkul</>
    <form method="post" action="registrasi_mk.php">
        <div class = "form-group">
            <label>Kode</label>
            <input class="form-control" type="text" name="kode">
        </div>
        <div class="form-group">    
            <label>Nama Matkul</label>
            <input class="form-control" type="text" name="nama">
        </div>
        <div class="form-group">
            <label>Kategori</label>
            <input class="form-control" type="text" name="kategori">
        </div>
        <div class="form-group">
            <label>sks</label>
            <input class="form-control" type="text" name="sks">
        </div>
            <input type="submit" name="daftar" value="Daftar">
    </form>
</div>

<?php

include_once "koneksi.php";
if (isset($_POST['daftar'])){
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $kategori = $_POST['kategori'];
    $sks = $_POST['sks'];
    
    $sql="INSERT INTO matkul (kode, nama, kategori, sks)
    VAlUES ('$kode','$nama','$kategori','$sks')";
    
    if (mysqli_query($conn, $sql)){
        echo"Data berhasil diinput <br>";
    }else{
    echo"Data tidak bisa diinput <br>";
    }

    echo $kode;
    echo"<br>";
    echo $nama;
    echo"<br>";
    echo $kategori;
    echo"<br>";
    echo $sks;
}
    else{
        echo "mohon maaf anda belum terdaftar";
    }
?>

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>