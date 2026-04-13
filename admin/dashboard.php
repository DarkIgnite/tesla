<?php include('session.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Dashboard Admin</title>
    <link rel="stylesheet" type="text/css" href="../css/styleadmin.css">
</head>
<body>
    <div class="wrapper">
        <div class="header"></div>

        <div class="sidebar">
            <div class="sidebar-title"><b>Tesla Admin</b></div>
            <ul>
                <?php include 'sidebar.php'; ?>
            </ul>
        </div>

        <div class="section">
            <div class="container">
                <h1>Dashboard Admin</h1>
                <h2>Selamat Datang, <?php echo $user_row['admin_name']; ?> </h2>
                <p style="color: var(--muted); font-size: 1.1rem; line-height: 1.6;">
                    Anda login sebagai Administrator dari Tesla Company. 
                    Kelola data dengan aman dan efisien.
                </p>
            </div>
        </div>
    </div>
</body>
</html>