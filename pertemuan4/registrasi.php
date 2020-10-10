<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System</title>

    <style>
    .inputan{
        width:600px;
        padding:12px 10px;
        margin:8px 0;
        box-sizing:border-box;
    }
    input[type=submit]{
        background-color:#4CAF50;
        border:none;
        color:black;
        padding:14px 32px;
        text-decoration:none;
        margin:4px 2px;
        cursor: pointer;
    }
    </style>
</head>
<body>
    <p>Login System<p>
    <form method="post" action="cekregistrasi.php">
        <label>Nama Depan</label><br>
        <input class="inputan" type="text" name="namadpn"><br>
        <label>Nama Belakang</label><br>
        <input class="inputan" type="text" name="namablk"><br>
        <label>Email</label><br>
        <input class="inputan" type="text" name="email"><br>
        <label>Username</label><br>
        <input class="inputan" type="text" name="username"><br>
        <label>Password</label><br>
        <input class="inputan" type="password" name="password"><br>
        <input type="submit" name="tombolsubmit" value="Daftar"><br>
    </form>
</body>
</html>