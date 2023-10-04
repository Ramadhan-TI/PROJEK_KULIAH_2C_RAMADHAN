<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ramadhan</title>
</head>
<body>
    <?php
$a = "saya sedang belajar PHP";// menggunakan include untuk memasukkan file eksternal// akan dipanggil 1x saja
//dalam file php ini
function tulistebal($teks)
{
echo"<br>";
echo "<b>$teks</b>"; //mengambil nilai dari require
}
tulistebal($a)
?>
</body>
</html>