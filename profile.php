<?php
// profile.php

// Ambil parameter username dari URL
$username = isset($_GET['username']) ? htmlspecialchars($_GET['username']) : '';

// Query data pengguna berdasarkan username (misalnya dari database)
// Di sini, kita hanya menampilkan username sebagai contoh
$userData = [
    'username' => $username,
    //Tambahkan data profil pengguna lainnya sesuai kebutuhan
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title><?php echo $userData['username']; ?>'s Linktree</title>
</head>
<body>

    <div class="container">
        <h1><?php echo $userData['username']; ?>'s Linktree</h1>
        <ul>
            <li><a href="#">Link 1</a></li>
            <li><a href="#">Link 2</a></li>
            <li><a href="#">Link 3</a></li>
            <!-- Add more links as needed -->
        </ul>
    </div>

</body>
</html>
