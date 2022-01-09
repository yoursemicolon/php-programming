<?php 
// koneksi ke DMBS
$conn = mysqli_connect("localhost", "root", "", "movies");

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {

    if( isset($_FILES["poster"]["name"]) && isset($_POST["title"]) ) {
        // ambil data dari tiap elemen form
        // upload file
        $poster = $_FILES["poster"]["name"];
        $tmp_poster = $_FILES["poster"]["tmp_name"];
        $folder = "img/".$poster;
    
        // ambil data lain
        $title = $_POST["title"];
        $cast = $_POST["cast"];
        $date = $_POST["date"];
        $production = $_POST["production"];
        $lang = $_POST["lang"];
    
        // panggil fungsi query insert data
        $query = "INSERT INTO movie
                    VALUES('', '$poster', '$title', '$cast', '$date', '$production', '$lang')";
    
        // execute query
        mysqli_query($conn, $query);
        
        // move upload image to the folder: img
        if(move_uploaded_file($tmp_poster, $folder)) {
            echo $msg = "Image uploaded successfully";
        } else {
            echo $msg = "Failed to upload image";
        }
        
        // cek apakah data berhasil ditambahkan atau tidak
        // var_dump(mysqli_affected_rows($conn));
        
        if( mysqli_affected_rows($conn) > 0 ) {
            echo "Data insert successfully!";
        } else {
            echo "Failed! <br>";
            echo mysqli_error($conn);
        }


    } else {
        $error = true;
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

<?php if(isset($error)) : ?>
    <p style="color: red; font-style: italic;">
        Poster or Title must be filled!
    </p>
<?php endif; ?>

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
                <input type="text" name="title" id="title"><br><br>
            </li>
            <li>
                <label for="cast">Cast : </label>
                <input type="text" name="cast" id="cast"><br><br>
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