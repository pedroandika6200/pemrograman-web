<?php

include("koneksi.php");

if (isset($_GET['kodemk'])) {


    $id = $_GET['kodemk'];

    $strsql = "DELETE FROM maatakuliah WHERE kodemk =$kodemk";
    $runSQL = mysqli_query($conn, $strsql);

    if ($runSQL) {
        header('Location: listmatkul.php');
    } else {
        die("gagal menghapus...");
    }
} else {
    die("akses dilarang...");
}
?>