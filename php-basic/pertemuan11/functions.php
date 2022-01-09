<?php 

$conn = mysqli_connect("localhost", "root", "", "movies");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }

    return $rows;
}

function insert($data) {
    global $conn;

    // ambil data dari tiap elemen form
    // upload file
    $poster = $_FILES["poster"]["name"];
    $tmp_poster = $_FILES["poster"]["tmp_name"];
    $folder = "img/".$poster;

    // ambil data lain
    $title = htmlspecialchars($data["title"]);
    $cast = htmlspecialchars($data["cast"]);
    $date = htmlspecialchars($data["date"]);
    $production = htmlspecialchars($data["production"]); 
    $lang = htmlspecialchars($data["lang"]); 

    // panggil fungsi query insert data
    $query = "INSERT INTO movie
                VALUES('', '$poster', '$title', '$cast', '$date', '$production', '$lang')";

    // execute query
    mysqli_query($conn, $query);
    
    // move upload image to the folder: img
    move_uploaded_file($tmp_poster, $folder);

    return mysqli_affected_rows($conn);
}

function delete($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM movie WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function update($data, $id) {
    global $conn;

    // ambil data dari tiap elemen form
    // upload file
    $poster = $_FILES["poster"]["name"];
    $tmp_poster = $_FILES["poster"]["tmp_name"];
    $folder = "img/".$poster;

    // ambil data lain
    // $id = $data["id"];
    $title = htmlspecialchars($data["title"]);
    $cast = htmlspecialchars($data["cast"]);
    $date = htmlspecialchars($data["date"]);
    $production = htmlspecialchars($data["production"]); 
    $lang = htmlspecialchars($data["lang"]); 

    // echo $id;

    // panggil fungsi query insert data
    $query = "UPDATE movie SET
                poster = '$poster',
                title = '$title',
                cast = '$cast',
                release_date = '$date',
                production = '$production', 
                lang = '$lang'
                WHERE id = $id
                ";

    // execute query
    mysqli_query($conn, $query);
    
    // move upload image to the folder: img
    move_uploaded_file($tmp_poster, $folder);

    return mysqli_affected_rows($conn);
}

?>