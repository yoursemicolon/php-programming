<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metode POSTt</title>
</head>
<body>
    <!-- mengirimkan data nama ke sebuah halaman -->
    <!-- seluruh data di form akan dikirimkan ke latihan4.php -->
    <form action="latihan4.php" method="POST">
        Masukkan nama:
        <input type="text" name="nama"><br>
        <button type="submit" name="submit">Kirim</button>
    </form>
</body>
</html>