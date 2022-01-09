<?php 
require 'functions.php';

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {

    if( insert($_POST) > 0 ) {
        echo "
            <script>
                alert('Data berhasil ditambahkan!');
                document.location.href = 'index.php';
            </script>
        ";

    } else {
        echo "
            <script>
                alert('Data tidak berhasil ditambahkan!');
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
    <title>Insert Movie</title>
</head>

<!-- <?php if(isset($error)) : ?>
    <p style="color: red; font-style: italic;">
        Poster or Title must be filled!
    </p>
<?php endif; ?> -->

<body>
    <h1>Insert Movie</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="poster"></label>
                <input type="file" name="poster" id="poster"><br><br>
            </li>
            <li>
                <label for="title">Title : </label>
                <input type="text" name="title" id="title" required><br><br>
            </li>
            <li>
                <label for="cast">Cast : </label>
                <input type="text" name="cast" id="cast" required><br><br>
            </li>
            <li>
                <label for="date">Release Date : </label>
                <input type="date" name="date" id="date"><br><br>
            </li>
            <li>
                <label for="production">Production : </label>
                <input type="text" name="production" id="production"><br><br>
            </li>
            <li>
                <label for="lang">Language : </label>
                <input type="text" name="lang" id="lang"><br><br>
            </li>
            <li>
                <button type="submit" name="submit">Insert Data</button>
            </li>
    </form>
</body>
</html>