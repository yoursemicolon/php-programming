<?php 
require 'functions.php';
$movies = query("SELECT * FROM movie");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Movie List 2021</h1>
    <a href="insert.php">Insert Movie</a><br><br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Action</th>
            <th>Poster</th>
            <th>Title</th>
            <th>Cast</th>
            <th>Release Date</th>
            <th>Production Company</th>
            <th>Language</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach( $movies as $row ): ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="update.php?id=<?= $row["id"]; ?>">Edit</a> |
                    <a href="delete.php?id=<?= $row["id"]; ?>" onclick="return confirm('Are you sure?');">Delete</a>
                </td>
                <td><img src="img/<?= $row["poster"]; ?>" alt="<?= $row["title"]; ?>" width="200px"></td>
                <td><?= $row["title"]; ?></td>
                <td><?= $row["cast"]; ?></td>
                <td>
                    <?php $date = date_create($row["release_date"]);
                    echo date_format($date, "F d Y"); ?>
                </td>
                <td><?= $row["production"]; ?></td>
                <td><?= $row["lang"]; ?></td>
            </tr>
        <?php $i++; ?>
        <?php endforeach; ?>

    </table>
</body>
</html>