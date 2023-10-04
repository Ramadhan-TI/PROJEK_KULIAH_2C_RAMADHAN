<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ramadhan</title>
</head>
<body>
    <h1>Menghitung Luas Persegi Panjang</h1>

    <?php
    function psgpjg($pjg, $lbr)
    {
        $luas = $pjg * $lbr;
        echo "Luas persegi panjang dengan panjang $pjg dan lebar $lbr adalah $luas <br>";
    }

    $panjang = 5;
    $lebar = 3;

    echo "Panjang: $panjang <br>";
    echo "Lebar: $lebar <br>";

    echo "Hasil perhitungan luas: <br>";
    psgpjg($panjang, $lebar);
    ?>

</body>
</html>
