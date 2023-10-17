<html>
    <head>
        <title>Koneksi Database MySQL</title>
    </head>
    <body>
        <h1>Demo koneksi database MySQL</h1>
        <?php 
            $conn=mysqli_connect("localhost","root","");
                if ($conn) {
                    echo "Server Terkoneksi";
                } else{
                    echo "Server Tidak Terkoneksi";
                }
                ?>
    </body>
</html>