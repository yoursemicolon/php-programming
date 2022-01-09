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

<?php if(isset($error)) : ?>
    <p style="color: red; font-style: italic;">
        Poster or Title must be filled!
    </p>
<?php endif; ?>

<body>
    <h1>Update Movie</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <!-- <input type="hidden" name="id" value="<?= $movie["id"]; ?>"> -->
        <ul>
            <li>
                <label for="poster"></label>
                <input type="file" name="poster" id="poster" value="<?= $movie["poster"]; ?>"><br><br>
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
                <input type="date" name="date" id="date" value="<?= strftime('%d/%m/%Y', strtotime($movie["release_date"])); ?>"><br><br>
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
                <button type="submit" name="submit">Ubah Data</button>
            </li>
    </form>
</body>
</html>