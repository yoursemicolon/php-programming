<!-- user yang datang ke latihan2.php harus membawa data dari latihan1.php -->
<!-- untuk itu user yang datang dengan langsung mengetikkan di url harus di tangani -->
<?php 
// cek apakah tidak ada data di $_GET
if( !isset($_GET["poster"]) || 
    !isset($_GET["title"]) || 
    !isset($_GET["maincast"]) ||
    !isset($_GET["release"]) ||
    !isset($_GET["production"]) ||
    !isset($_GET["language"]) ) {
        
    // redirect -> memindahkan user dari satu halaman ke halaman lain
    header("Location: latihan1.php");
    exit; // agar script di bawah tidak di eksekusi
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Detail</title>
</head>
<body>
    <ul>
        <!-- tangkap datanya -->
        <li><img src="img/<?= $_GET["poster"]; ?>" alt="<?= $_GET["title"]; ?>" width="200px"></li>
        <li>Title: <?= $_GET["title"]; ?></li>
        <li>Main Cast: <?= $_GET["maincast"]; ?></li>
        <li>Release: <?= $_GET["release"]; ?></li>
        <li>Production: <?= $_GET["production"]; ?></li>
        <li>Language: <?= $_GET["language"]; ?></li>
    </ul>
    <a href="latihan1.php">Back to movie list</a>
</body>
</html>