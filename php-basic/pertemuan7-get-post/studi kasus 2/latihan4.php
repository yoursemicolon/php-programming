<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 4</title>
</head>
<body>
    <?php if( isset($_POST["submit"]) ) : ?>
        <h1>Selamat datang, <?= $_POST["nama"]; ?></h1>
        <a href="latihan3-post.php">Kembali ke halaman sebelumnya.</a>
    <?php endif; ?>
</body>
</html>