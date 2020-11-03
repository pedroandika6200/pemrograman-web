<?php
include "koneksi.php";
$id     = $_GET['id'];
$result = mysqli_query($conn, "DELETE FROM contact WHERE id = '$id'");
if ($result){ ?>
    <script language="javascript">
        document.location.href="admin.php";
    </script>
<?php
}else {
        trigger_error('Perintah SQL Salah: ' . $sql . ' Error: ' . $conn->error, E_USER_ERROR);
}
?>