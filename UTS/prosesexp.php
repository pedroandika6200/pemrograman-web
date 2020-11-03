<?php
include("koneksi.php");

if (isset($_POST['id'])) {

    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];


    $strsql = "UPDATE exp SET judul='$judul', isi='$isi' WHERE id='$id'";
    $runSQL = mysqli_query($conn, $strsql);

    if ($runSQL) {
        header('Location: admexp.php?status=sukses');
    } else {
        die("Location: admexp.php?status=gagal");
    }
} else {
    die("Akses dilarang...");
}