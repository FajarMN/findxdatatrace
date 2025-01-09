<?php

// Including Connection 
include_once('database/connection.php');

// Fetch Data
$all = mysqli_query($conn, "SELECT * FROM reference");
$osint = mysqli_query($conn, "SELECT * FROM reference WHERE type = 'Osint'");
$geoint = mysqli_query($conn, "SELECT * FROM reference WHERE type = 'Geoint'");
$socmint = mysqli_query($conn, "SELECT * FROM reference WHERE type = 'Socmint'");
$humint = mysqli_query($conn, "SELECT * FROM reference WHERE type = 'Humint'");
$cybint = mysqli_query($conn, "SELECT * FROM reference WHERE type = 'Cybint'");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- X-frame option -->
    <meta http-equiv="X-Frame-Options" content="SAMEORIGIN">

    <title>Beranda - FINDxDataTrace</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@400;700&display=swap" rel="stylesheet">

</head>

<body>

    <!-- Container : Start -->
    <div id="container-custom">

        <!-- Video : Start -->
        <video id="bg-vid" muted autoplay loop>
            <source src="assets/videos/background.mp4">
        </video>
        <!-- Video : End -->

        <!-- Header : Start -->

        <nav style="padding-bottom: 5px; padding-top: 5px;">
            <?php if ($all->num_rows > 0) : ?>
                <button class="toggler-sidebar">☰</button>
            <?php endif ?>
            <div class="nav-wrapper">
                <a href="#">Beranda</a>
                <a href="pages/public/news.php">Berita</a>
                <a href="pages/public/about.php">Tentang</a>
                <a href="pages/admin/login.php">Administrator</a>
            </div>
        </nav>
        <!-- Header : End -->

        <!-- Blur : Start -->
        <div id="blur"></div>
        <!-- Blur : End -->

        <!-- Wrapper : Start -->
        <div class="wrapper">

            <!-- Sidebar : Start -->
            <?php if ($all->num_rows > 0) : ?>
                <sidebar id="sidebar">

                    <!-- Osint : Start -->
                    <div id="sidebar-osint">
                        <button id="btn-osint">Alat Osint</button>
                        <div id="osint-list">
                            <?php while ($row = mysqli_fetch_assoc($osint)) : ?>
                                <div class="tools-list">
                                    <div value='<?php echo $row['link'] ?>' desc='<?php echo $row['desc'] ?>' style="cursor: pointer;"
                                        class="tools"><?php echo $row['name'] ?></div>
                                </div>
                            <?php endwhile ?>
                        </div>
                    </div>
                    <!-- Osint : End -->

                    <!-- Geoint : Start -->
                    <div id="sidebar-geoint">
                        <button id="btn-geoint">Alat Geoint</button>
                        <div id="geoint-list">
                            <?php while ($row = mysqli_fetch_assoc($geoint)) : ?>
                                <div class="tools-list">
                                    <div value='<?php echo $row['link'] ?>' desc='<?php echo $row['desc'] ?>' style="cursor: pointer;"
                                        class="tools"><?php echo $row['name'] ?></div>
                                </div>
                            <?php endwhile ?>
                        </div>
                    </div>
                    <!-- Geoint : End -->

                    <!-- Socmint : Start -->
                    <div id="sidebar-socmint">
                        <button id="btn-socmint">Alat Socmint</button>
                        <div id="socmint-list">
                            <?php while ($row = mysqli_fetch_assoc($socmint)) : ?>
                                <div class="tools-list">
                                    <div value='<?php echo $row['link'] ?>' desc='<?php echo $row['desc'] ?>' style="cursor: pointer;"
                                        class="tools"><?php echo $row['name'] ?></div>
                                </div>
                            <?php endwhile ?>
                        </div>
                    </div>
                    <!-- Socmint : End -->

                    <!-- Humint : Start -->
                    <div id="sidebar-humint">
                        <button id="btn-humint">Alat Humint</button>
                        <div id="humint-list">
                            <?php while ($row = mysqli_fetch_assoc($humint)) : ?>
                                <div class="tools-list">
                                    <div value='<?php echo $row['link'] ?>' desc='<?php echo $row['desc'] ?>' style="cursor: pointer;"
                                        class="tools"><?php echo $row['name'] ?></div>
                                </div>
                            <?php endwhile ?>
                        </div>
                    </div>
                    <!-- Humint : End -->

                    <!-- Humint : Start -->
                    <div id="sidebar-cybint">
                        <button id="btn-cybint">Alat Cybint</button>
                        <div id="cybint-list">
                            <?php while ($row = mysqli_fetch_assoc($cybint)) : ?>
                                <div class="tools-list">
                                    <div value='<?php echo $row['link'] ?>' style="cursor: pointer;" class="tools"><?php echo $row['name'] ?> <?php echo $row['ket'] ?></div>
                                </div>
                            <?php endwhile ?>
                        </div>
                    </div>
                    <!-- Humint : End -->


                </sidebar>
            <?php endif ?>
            <!-- Sidebar : End -->

            <!-- Content : Start -->
            <div class="content-home">

                <!-- Welcome Section : Start -->
                <div id="welcome-section" style="width: 100%">
                    <h1 style="margin-bottom: 20px; text-align: center;">FINDxDataTrace</h1>
                    <p style="margin-bottom: 20px; text-align: justify;">
                        Open Source Intelligence (OSINT) adalah pendekatan pengumpulan dan analisis informasi yang tersedia secara publik, dimanfaatkan untuk tujuan intelijen dan keamanan. Dengan menggunakan OSINT, informasi berharga dapat diperoleh dari beragam sumber terbuka seperti situs web, media sosial, arsip berita, catatan publik, forum online, dan berbagai basis data terbuka. OSINT memungkinkan pemahaman yang lebih mendalam tentang pergerakan, pola, dan interaksi target, baik individu, kelompok, atau organisasi
                    </p>

                    <p style="margin-bottom: 20px; text-align: justify;">
                        Dalam konteks ini, alat-alat profiling memainkan peran penting. Profiling adalah proses menyusun informasi detail tentang seseorang atau entitas, termasuk kebiasaan, hubungan, jaringan sosial, lokasi, dan data lain yang relevan. Alat profiling dirancang untuk mengidentifikasi pola dan mengungkap informasi spesifik yang sebelumnya tidak terlihat, yang dapat membantu dalam penyelidikan, analisis risiko, atau pengambilan keputusan yang berbasis data
                    </p>

                    <p style="margin-bottom: 20px; text-align: justify;">
                        Pengguna OSINT dan alat profiling ini tidak hanya terbatas pada lembaga keamanan atau penegak hukum, tetapi juga dapat digunakan oleh perusahaan, profesional keamanan siber, peneliti, dan bahkan individu yang ingin memahami lebih jauh lingkungan digital mereka. Alat-alat ini dapat membantu mengidentifikasi potensi ancaman, mendeteksi penipuan, atau mendapatkan wawasan tentang pesaing bisnis secara etis dan sah
                    </p>

                    <p style="margin-bottom: 20px; text-align: justify;">
                        Jelajahi situs kami untuk menemukan berbagai alat OSINT, panduan, dan sumber daya yang berguna untuk berbagai kebutuhan investigasi. Kami menawarkan koleksi alat yang beragam—mulai dari perangkat pemantauan media sosial, alat pencarian data arsip, hingga alat analisis jaringan. Kami berkomitmen untuk memberikan panduan yang tepat guna membantu Anda dalam memanfaatkan data publik secara maksimal dan etis
                    </p>
                </div>
                <!-- Welcome Section : End -->

                <!-- Welcome Section : Start -->
                <div id="iframe-section" style="width: 100%">
                    <h1 style="margin-bottom: 20px; text-align: center;" id="iframe-title">Osint Tools</h1>
                    <p style="margin-bottom: 20px; text-align: center;" id="iframe-desc">Deskripsi</p>
                    <iframe src="https://en.wikipedia.org/wiki/Open-source_intelligence" frameborder="0" id="iframe-id" scrolling="yes" style="width: 100%; height: 100vh;"></iframe>
                </div>
                <!-- Welcome Section : End -->

            </div>
            <!-- Content : End -->

        </div>
        <!-- Wrapper : End -->


    </div>
    <!-- Container : End -->



    <footer>
        <p style="font-size: 18px; font-weight: bold;">&copy; 2024 FINDxDataTrace. All rights reserved.</p>
    </footer>


    <!-- Loading Screen : Start -->
    <div id="loading-screen">
        <div class='track'>
            <div class='spinner'></div>
        </div>
    </div>
    <!-- Loading Screen : End -->

    <script src="js/script.js"></script>
    <script src="js/dropdown.js"></script>
</body>

</html>