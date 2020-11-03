<?php
include("koneksi.php");

if (isset($_POST['id'])) {

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $status = $_POST['status'];
    $programs = $_POST['programs'];
    $alamat = $_POST['alamat'];


    $strsql = "UPDATE education SET nama='$nama', status='$status', programs='$programs', alamat='$alamat' WHERE id='$id'";
    $runSQL = mysqli_query($conn, $strsql);

    if ($runSQL) {
        header('Location: admedu.php?status=sukses');
    } else {
        die("Location: admedu.php?status=gagal");
    }
} else {
    die("Akses dilarang...");
}