<?php
// pengulangan pada array
// for atau for each
$angka = [3, 2, 15, 20, 11, 77, 89, 100, 24, 45];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengulangan array</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }

        .clear { clear: both; }
    </style>
</head>
<body>
    <!-- cara pertama -->
    <?php for($i = 0; $i < count($angka); $i++) : ?>
        <div class="kotak"><?php echo $angka[$i]; ?></div>
    <?php endfor; ?>

    <div class="clear"></div>

    <!-- cara kedua -->
    <?php foreach( $angka as $a ) : ?>
        <div class="kotak"><?php echo $a; ?></div>
    <?php endforeach; ?>
</body>
</html>