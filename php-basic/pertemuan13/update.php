<?php 
require 'functions.php';

// ambil data di url
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$movie = query("SELECT * FROM movie WHERE id = $id")[0];
// yang dikembalikan adalah array numerik
// var_dump($movie);

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
    
    // cek apakah data berhasil diubah
    if( update($_POST, $id) > 0 ) {
        echo "
            <script>
                alert('Data berhasil diubah!');
                document.location.href = 'index.php';
            </script>
        ";

    } else {
        echo "
            <script>
                alert('Data gagal diubah!');
                document.location.href = 'index.php';
            </script>
        ";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Movie</title>
</head>

<body>
    <h1>Update Movie</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="oldPoster" value="<?= $movie["poster"]; ?>">
        <ul>
            <li>
                <label for="poster">Poster : </label> <br>
                <img src="img/<?= $movie["poster"]; ?>" alt="<?= $movie["title"]; ?>" width="200px"><br>
                <input type="file" name="poster" id="poster">
                <br><br>
            </li>
            <li>
                <label for="title">Title : </label>
                <input type="text" name="title" id="title" required value="<?= $movie["title"]; ?>"><br><br>
            </li>
            <li>
                <label for="cast">Cast : </label>
                <input type="text" name="cast" id="cast" required value="<?= $movie["cast"]; ?>"><br><br>
            </li>
            <li>
                <label for="date">Release Date : </label>
                <input type="date" name="date" id="date" value="<?= date('Y-m-d', strtotime($movie["release_date"])); ?>"><br><br>
            </li>
            <li>
                <label for="production">Production : </label>
                <input type="text" name="production" id="production" value="<?= $movie["production"]; ?>"><br><br>
            </li>
            <li>
                <label for="lang">Language : </label>
                <input type="text" name="lang" id="lang" value="<?= $movie["lang"]; ?>"><br><br>
            </li>
            <li>
                <button type="submit" name="submit">Change Data</button><br><br>
            </li>
            <a href="index.php">Back</a>
    </form>
</body>
</html>