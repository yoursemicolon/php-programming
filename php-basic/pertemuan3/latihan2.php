<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan PHP</title>
    <style>
        .warna-baris {
            background-color: silver;
        }
    </style>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <!-- cara pertama -->
        <?php /*
            for($i = 1; $i <= 3; $i++) {
                echo "<tr>";
                for($j = 1; $j <= 5; $j++) {
                    echo "<td>$i, $j</td>";
                }
                echo "</tr>";
            } */
        ?>

        <!-- cara kedua -->
        <!-- direkomendasikan, pake ini aja ceunah -->
        <!-- menggunalan pengkondisian untuk memberi warna pada baris -->
        <?php for($i = 1; $i <= 5; $i++) : ?>
            <?php if($i % 2 == 0) : ?>
                <tr class="warna-baris">
            <?php else : ?>
                <tr>
            <?php endif; ?>
                <?php for($j = 1; $j <= 5; $j++) : ?>
                    <td><?= "$i, $j"; ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>



</body>
</html>