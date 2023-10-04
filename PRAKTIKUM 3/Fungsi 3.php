<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ramadhan</title>
</head>
<body>
    <?php
$str = "belajar php ternyata menyenangkan";
echo strtolower($str); //ubah huruf ke kecil semua
echo "<br>";
echo strtoupper($str); //ubah huruf ke besar semua
echo "<br>";
echo str_replace("menyenangkan","mudah lho",$str); //mengganti string
?>
</body>
</html>