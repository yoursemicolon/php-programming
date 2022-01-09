<?php 
// koneksi ke database
// butuh extension ke mysqli

// mysqli_connect("server_name", "username", "pass", "dbname");
$conn = mysqli_connect("localhost", "root", "", "movies");

// ambil data dari tabel mahasiswa
// mysqli_query(koneksi ke db, "sintaks sql");
// query berhasil mengembalikan true, gagal false
$result = mysqli_query($conn, "SELECT * FROM movie");
// var_dump($result);

// untuk mengecek error
// if ( !result ) {
//     echo mysqli_error($conn);
// }

// while ( $movie = mysqli_fetch_assoc($result) ) {
//     var_dump($movie);
// }

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
        <?php while( $row = mysqli_fetch_assoc($result) ): ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="">Edit</a> |
                    <a href="">Delete</a>
                </td>
                <td><img src="img/<?= $row["poster"]; ?>" alt="<?= $row["title"]; ?>" width="200px"></td>
                <td><?= $row["title"]; ?></td>
                <td><?= $row["cast"]; ?></td>
                <td>
                    <?php $date = date_create($row["release_date"]);
                    echo date_format($date, "F d"); ?>
                </td>
                <td><?= $row["production"]; ?></td>
                <td><?= $row["lang"]; ?></td>
            </tr>
        <?php $i++; ?>
        <?php endwhile; ?>

    </table>
</body>
</html>