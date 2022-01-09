<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>

<body>
    <!-- cek tombol submit udah dipencet belum -->
    <?php if (isset($_POST["submit"])) : ?>
        <h1>Halo, selamat datang <?= $_POST["nama"]; ?></h1>
    <?php endif; ?>

    <form action="" method="POST">
        Masukkan nama panggilan:
        <input type="text" name="nama" required>
        <button type="submit" name="submit">Kirim!</button>
    </form>
</body>

</html>