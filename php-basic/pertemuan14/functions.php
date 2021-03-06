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

    // ambil data lain
    $title = htmlspecialchars($data["title"]);
    $cast = htmlspecialchars($data["cast"]);
    $date = htmlspecialchars($data["date"]);
    $production = htmlspecialchars($data["production"]); 
    $lang = htmlspecialchars($data["lang"]); 

    // upload file 
    $image = upload();
    if( !$image ) {
        return false;
    }

    // panggil fungsi query insert data
    $query = "INSERT INTO movie
                VALUES('', '$image', '$title', '$cast', '$date', '$production', '$lang')";

    // execute query
    mysqli_query($conn, $query);
    
    return mysqli_affected_rows($conn);
}

function upload() {
    // ambil data dari $_FILES
    $poster = $_FILES["poster"]["name"];
    $poster_size = $_FILES["poster"]["size"];
    $poster_error = $_FILES["poster"]["error"];
    $tmp_poster = $_FILES["poster"]["tmp_name"];
    // $folder = "img/".$poster;

    // cek apakah ada gambar yang diupload
    if( $poster_error === 4 ) {
        echo "<script>
                alert('Pilih gambar terlebih dahulu!');
            </script>";
        return false;
    }

    // cek apakah yang diupload adalah gambar
    $validExtension = ['jpg', 'jpeg', 'png'];
    // $posterExtension = explode('.', $poster);
    // $posterExtension = strtolower(end($posterExtension)); // mengambil yang paling akhir dan ubah jadi huruf kecil

    // get file extension with pathinfo()
    $posterExtension = pathinfo($poster, PATHINFO_EXTENSION);
    $posterExtension = strtolower($posterExtension);

    // cek ekstensi file
    // in_array(needle, haystack)
    if( !in_array($posterExtension, $validExtension) ) {
        echo "<script>
                alert('Yang Anda upload bukan gambar!');
            </script>";
        return false;
    }

    // jika ukuran gambar terlalu besar
    if( $poster_size > 1000000 ) {
        echo "<script>
                alert('Ukuran gambar terlalu besar!');
            </script>";
        return false;
    }

    // rename file
    $newFileName = md5(rand()) . '.' . $posterExtension;
    $path = "img/" . $newFileName;
    
    // gambar siap diupload
    move_uploaded_file($tmp_poster, $path);

    // kembalikan nama file untuk dimasukkan ke dalam database
    return $newFileName;

}

function delete($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM movie WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function update($data, $id) {
    global $conn;

    // ambil data dari tiap elemen form
    $title = htmlspecialchars($data["title"]);
    $cast = htmlspecialchars($data["cast"]);
    $date = htmlspecialchars($data["date"]);
    $production = htmlspecialchars($data["production"]); 
    $lang = htmlspecialchars($data["lang"]);
    $oldPoster = htmlspecialchars($data["oldPoster"]);

    // cek apakah user pilih gambar baru atau tidak
    if( $_FILES["poster"]["error"] === 4 ) { // error = 4, tidak ada gambar yang dipilih
        $poster = $oldPoster;
    } else if( $_FILES["poster"]["error"] === 0 ) { // gambar diupload
        $poster = upload();
    }

    // query update data
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
    
    return mysqli_affected_rows($conn);
}

function search($keyword) {
    global $conn;
    $query = "SELECT * FROM movie
                WHERE 
                title LIKE '%$keyword%' OR
                cast LIKE '%$keyword%' OR
                release_date LIKE '%$keyword%' OR
                production LIKE '%$keyword%' OR
                lang LIKE '%$keyword%'
            ";

    return query($query);
}

function register($data) {
    global $conn;

    // ambil data yang dikirimkan
    $username = strtolower(stripslashes($data["username"]));
    $email = $data["email"];
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $passwordConfirmation = mysqli_real_escape_string($conn, $data["password2"]);

    // check whether username or email is already exist
    $checkUsername = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");
    $checkEmail = mysqli_query($conn, "SELECT email FROM users WHERE email = '$email'");

    if( mysqli_fetch_assoc($checkUsername) ) {
        echo "<script>
                alert('Username already exist!');
            </script>";
        return false;
    }

    if( mysqli_fetch_assoc($checkEmail) ) {
        echo "<script>
                alert('Email already registered!');
            </script>";
        return false;
    }

    // check password confirmation
    if( $password !== $passwordConfirmation) {
        echo "<script>
                alert('Password doesn't match!');    
            </script>";
        return false;
    }

    // password encryption
    $password = password_hash($password, PASSWORD_DEFAULT);

    // insert new user to database
    mysqli_query($conn, "INSERT INTO users VALUES('', '$username', '$email', '$password');");
    return mysqli_affected_rows($conn);
}

?>