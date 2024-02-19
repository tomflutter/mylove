<!-- HTML -->

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>MEDIA PLANN</title>
</head>
<body>

    <div class="container">
        <?php
        // Contoh data profil, dapat diambil dari database
        $userProfile = [
            'name' => 'TOMFLUTTER',
            'description' => 'Sebagai seorang programmer, saya adalah pencipta solusi teknologi inovatif melalui analisis yang cermat dan penulisan kode yang handal. Senang mengeksplorasi teknologi baru dan terus belajar untuk tetap relevan.',
            'links' => [
                ['title' => 'Search AI', 'url' => 'https://browse.ai/?via=tomy-radea-andriana'],
                ['title' => 'Creatife dengan editor AI', 'url' => 'http://tinyurl.com/3wj32y6v'],
                ['title' => '#1 alat AI
                yang paling banyak digunakan untuk periklanan
                Hasilkan materi iklan yang mengungguli pesaing Kalian', 'url' => 'https://free-trial.adcreative.ai/hmk3lr57vxj4'],
                ['title' => 'Buat formulir yang menarik, portal pelanggan, CRM, dan aplikasi bisnis lainnya tanpa kode apa pun - semuanya di satu tempat!',                     'url' => 'https://join.formaloo.com/CreateAccount']
            ]
        ];
        ?>
        
        <!-- Menampilkan tautan profil -->
        <div class="profile">
        <img src="tom.svg" alt="Profile Image" style="max-width: 100px; border-radius: 50%;"> <!-- Properti border-radius menentukan bentuk bulat -->
            <h1><?= $userProfile['name'] ?>'s</h1>
            <p class="profile-description"><?= $userProfile['description'] ?></p>
            <ul class="button-list">
                <?php foreach ($userProfile['links'] as $link) : ?>
                    <li><a href="<?= $link['url'] ?>" class="button"><?= $link['title'] ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
        
        <!-- Di dalam elemen profil setelah tautan-tautan -->
<div class="social-icons">
    <a href="https://github.com/tomflutter" class="social-icon" target="_blank"><i class="fab fa-github"></i></a>
    <a href="https://www.instagram.com/tomflutter" class="social-icon" target="_blank"><i class="fab fa-instagram"></i></a>
    <a href="https://shorturl.at/aepFU" class="social-icon" target="_blank"><i class="fab fa-youtube"></i></a>
    <!-- Tambahkan ikon media sosial lainnya sesuai kebutuhan -->
</div>
<!-- Kode iklan MGID di bawah profil -->
        <div class="ad-container">
            <!-- Composite Start -->
            <div id="M851161ScriptRootC1578754"></div>
            <script src="https://jsc.mgid.com/t/r/triplepro.xyz.1578754.js" async></script>
            <!-- Composite End -->
        </div>
    </div>


    </div>

</body>
</html>
