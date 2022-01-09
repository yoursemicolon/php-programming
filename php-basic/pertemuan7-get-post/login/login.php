<?php
// cek apakah tombol submit sudah ditekan atau belum
// key dari array associative-nya adalah name pada form
if ( isset($_POST["submit"]) ) {

    // cek username dan password
    if ( $_POST["username"] == "admin" && $_POST["password"] == "123" ) {

        // jika benar, redirect ke halaman admin
        header("Location: admin.php");
        exit;
    } else {
        // jika salah, tampilkan pesan kesalahan
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
    <title>Login Admin</title>
</head>

<?php if(isset($error)) : ?>
    <p style="color: red; font-style: italic;">
        Username / password salah!
    </p>
<?php endif; ?>

<body>
    <h1>Login Admin</h1>
    <ul>
        <form method="POST">
            <li>
                <!-- label dan input dihubungkan menggunakan id -->
                <label for="username">Username :</label>
                <input type="text" name="username" id="username"><br>
            </li>
            <li>
                <label for="password">Password : </label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="submit">Login</button>
            </li>
        </form>
    </ul>
</body>

</html>