<?php
    include 'db.php';
    $kontak = mysqli_query($conn, "SELECT admin_telp, admin_email, admin_address FROM tb_admin WHERE admin_id = 1");
    $a = mysqli_fetch_object($kontak);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="conatiner">
            <h1><a href="index.php">Tesla</a></h1>
            <ul>
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Register</a></li>
                <li><a href="">Our Product</a></li>
            </ul>
        </div>
    </header>

    <div class="search">
        <div class="conatiner"></div>
    </div>
    <div class="search">
        <div class="conatiner"></div>
    </div>

    <div class="section">
        <div class="container"></div>
    </div>
    <div class="section">
        <div class="conatiner"></div>
    </div>  

    <div class="footer">
        <div class="container"></div>
    </div>
</body>
</html>