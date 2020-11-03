<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm Add</title>
</head>
<body>
<?php
    include_once "koneksi.php";
    if (isset($_POST['tombolSubmit'])) {
        $nama = $_POST['nama'];
        $status = $_POST['status'];
        $programs = $_POST['programs'];
        $alamat = $_POST['alamat'];

        $sql = "INSERT INTO education (nama, status, programs, alamat)
        VALUES ('$nama','$status','$programs', '$alamat')";

        if (mysqli_query($conn, $sql)) {
        header('Location: admedu.php?status=sukses');
        }
        else {
            echo "Data tidak berhasil diinput pada string sql: <br>
            $sql <br> dg error: ".mysqli_error($conn);
        }
    
?>
<?php
   }
   else{
    echo "Mohon maaf konfirmasi tidak bs diakses";
   }
?>
</body>
</html>
