<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koneksi Database Mysql</title>
</head>
<body>
    <h1>Demo Koneksi Database MySQl</h1>
    <?php
    $conn = mysqli_connect("localhost","root","");
    if($conn)
    {
        echo "Server Terkoneksi";
    }
    else
    {
        echo "Server tidak Terkoneksi";
    }
    ?>
</body>
</html>