<?php 
// studi kasus movie apps streaming
$movies = [
    [
        "title" => "Black Widow",
        "casts" => ["Scarlett Johanson", "Florence Pugh"],
        "release date" => "July 9",
        "production" => "Marvel Studio",
        "language" => "English",
        "poster" => "black-widow.jpg",
    ],
    [
        "title" => "Cruella",
        "casts" => ["Emma Stone"],
        "release date" => "May 28",
        "production" => "Disney+",
        "language" => "English",
        "poster" => "cruella.jpg",
    ],
    [
        "title" => "Vivo",
        "casts" => ["Lin Manuel Miranda", "Ynairaly Simo"],
        "release date" => "August 6",
        "production" => "Netflix",
        "language" => "English",
        "poster" => "vivo.jpg",
    ],
    [
        "title" => "Luca",
        "casts" => [""],
        "release date" => "Summer 2021",
        "production" => "Disney Pixar",
        "language" => "English",
        "poster" => "luca.png",
    ],
    [
        "title" => "Rumble",
        "casts" => [""],
        "release date" => "January 2021",
        "production" => "Paramount Plus",
        "language" => "English",
        "poster" => "rumble.jpg",
    ],
    [
        "title" => "Cinderella",
        "casts" => ["Camilla Cabello"],
        "release date" => "September 3",
        "production" => "Prime Video",
        "language" => "English",
        "poster" => "cinderella.jpg",
    ],
    [
        "title" => "Superman: No Way Home",
        "casts" => ["Tom Holland", "Zendaya", "Andrew"],
        "release date" => "December 17",
        "production" => "Marvel Studio",
        "language" => "English",
        "poster" => "spiderman.jpg",
    ],
    [
        "title" => "Nussa: The Movie",
        "casts" => ["Muzakki Ramdhan", "Ocean Fajar"],
        "release date" => "October 14",
        "production" => "The Little Giantz",
        "language" => "Indonesia",
        "poster" => "nussa.jpg",
    ],
    [
        "title" => "Surga yang Tak Dirindukan 3",
        "casts" => ["Fedi Nuril", "Marsha Timothy", "Reza Rahadian"],
        "release date" => "April 16",
        "production" => "Disney+ hotstar",
        "language" => "Indonesia",
        "poster" => "surga.jpg",
    ],
    [
        "title" => "Ali dan Ratu-ratu Queens",
        "casts" => ["Iqbaal Ramadhan", "Nirina Zubir", "Happy Salma"],
        "release date" => "June 17",
        "production" => "Netflix",
        "language" => "Indonesia",
        "poster" => "ali.jpg",
    ]
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies Streaming</title>
    <style>
        img { border: 2px solid black; }
        ul li, h1 { font-family: poppins; }
    </style>
</head>
<body>
    <h1>Welcome in Movies Streaming</h1>
    <?php foreach($movies as $movie) : ?>
        <ul>
            <img 
            src="img/<?= $movie["poster"]; ?>" 
            alt="<?= $movie["title"]; ?>" 
            width="200px">
            <li>Title: <?= $movie["title"]; ?></li>
            <li>Main Cast: <?= $movie["casts"][0]; ?></li>
            <li>Support Cast: </li>
            <li>Release Date: <?= $movie["release date"] ?></li>
            <li>Production Company: <?= $movie["production"]; ?></li>
            <li>Language: <?= $movie["language"]; ?> </li>
            <br><br>
        </ul>
    <?php endforeach; ?>
</body>
</html>