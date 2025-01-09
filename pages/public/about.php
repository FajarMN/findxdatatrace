<?php

// Including Connection 
include_once('../../database/connection.php');

// Fetch Data
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

    <title>Tentang - FINDxDataTrace</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@400;700&display=swap" rel="stylesheet">

</head>

<body>

    <!-- Container : Start -->
    <div id="container-custom">

        <!-- Header : Start -->
        <!-- Video : Start -->
        <video id="bg-vid" muted autoplay loop>
            <source src="../../assets/videos/background.mp4">
        </video>
        <!-- Video : End -->
        <nav style="padding-bottom: 5px; padding-top: 5px;">
            <div class="nav-wrapper">
                <a href="../../index.php">Beranda</a>
                <a href="news.php">Berita</a>
                <a href="#">Tentang</a>
                <a href="../admin/index.php">Administrator</a>
            </div>
        </nav>
        <!-- Header : End -->

        <!-- Wrapper : Start -->
        <div class="wrapper">

            <!-- Content : Start -->
            <div class="content-home">

                <!-- Welcome Section : Start -->
                <div id="welcome-section" style="width: 90%">
                    <h1 style="margin-bottom: 20px; text-align: center;">FINDxDataTrace</h1>
                    <p style="margin-bottom: 20px; text-align: justify;">
                        FINDxDataTrace adalah platform inovatif yang dirancang untuk memfasilitasi profesional forensik digital dan keamanan siber dalam melakukan investigasi Open Source Intelligence (OSINT) secara komprehensif. Platform ini menyediakan berbagai alat analisis modular seperti GEOINT (Geospatial Intelligence), SOCMINT (Social Media Intelligence), HUMINT (Human Intelligence), dan CYBINT (Cyber Intelligence), yang masing-masing membantu pengguna mengakses dan menganalisis data dari sumber terbuka. Dengan fitur seperti pemetaan informasi geospasial, analisis media sosial, dan pelacakan aktivitas siber, FINDxDataTrace memungkinkan penggunanya melakukan investigasi yang mendalam dan efektif di berbagai aspek, mulai dari identifikasi lokasi fisik hingga pengumpulan informasi dari media sosial.
                    </p>

                    <p style="margin-bottom: 20px; text-align: justify;">
                        Dikembangkan dengan pendekatan modular, platform ini memberi fleksibilitas bagi pengguna dalam memilih dan menerapkan alat sesuai kebutuhan investigasi. Fokus utama FINDxDataTrace adalah menyediakan layanan yang efisien dan aman bagi profesional, tanpa mengorbankan prinsip-prinsip legalitas. Data yang dikumpulkan berasal dari sumber terbuka yang sah sehingga mematuhi kebijakan privasi, dan memungkinkan pengguna fokus pada interpretasi serta analisis data tanpa risiko pelanggaran hukum.
                    </p>

                    <p style="margin-bottom: 20px; text-align: justify;">
                        Platform FINDxDataTrace merupakan hasil kerja sama dengan PT DataTrace Forensics Lab, perusahaan forensik digital yang telah berpengalaman lebih dari satu dekade dalam keamanan siber, investigasi, dan intelijen. Dengan kantor pusat di Banyumas, Indonesia, PT DataTrace memiliki operasi di berbagai wilayah strategis termasuk New York, Jakarta, dan Sumatra, serta memiliki rekam jejak yang mengesankan dalam menangani lebih dari 150 klien dari berbagai sektor. Di antara layanan utamanya adalah Digital Forensics Lab Setup, yang membantu organisasi mendirikan laboratorium forensik untuk pencegahan dan penanganan kejahatan siber, serta Mobile Forensics, di mana perusahaan telah menangani lebih dari 250 kasus perangkat seluler.
                    </p>

                    <p style="margin-bottom: 20px; text-align: justify;">
                        PT DataTrace juga aktif dalam kerja sama dengan institusi akademik, seperti Universitas Muhammadiyah Purwokerto, untuk mengembangkan solusi inovatif seperti laboratorium forensik bergerak dan perangkat lunak investigasi siber. Melalui pengembangan website FINDxDataTrace, PT DataTrace berkomitmen untuk memberikan kontribusi yang signifikan bagi komunitas keamanan siber. Platform ini diharapkan dapat meningkatkan akurasi dan efektivitas investigasi para profesional forensik digital, memperkuat keamanan siber, dan menjadi solusi berkelanjutan dalam menghadapi ancaman digital yang semakin kompleks.
                    </p>

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
    <div id="">
        <div class='track'>
            <div class='spinner'></div>
        </div>
    </div>
    <!-- Loading Screen : End -->

    <script src="../../js/script.js"></script>
    <script src="../../js/dropdown.js"></script>
</body>

</html>