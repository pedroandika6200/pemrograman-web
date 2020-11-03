<?php
include("koneksi.php");

if (isset($_POST['id'])) {

    $id = $_POST['id'];
    $tgl = $_POST['tgl'];
    $ket = $_POST['ket'];
    $isi = $_POST['isi'];


    $strsql = "UPDATE about SET tgl='$tgl', ket='$ket', isi='$isi' WHERE id='$id'";
    $runSQL = mysqli_query($conn, $strsql);

    if ($runSQL) {
        header('Location: admabout.php?status=sukses');
    } else {
        die("Location: admabout.php?status=gagal");
    }
} else {
    die("Akses dilarang...");
}