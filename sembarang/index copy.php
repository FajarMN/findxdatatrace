<?php
session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - FINDxDataTrace</title>
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@400;700&display=swap" rel="stylesheet">
    <!-- DataTables -->
    <link rel="stylesheet" href="./assets/AdminLTE-3.2.0/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="./assets/AdminLTE-3.2.0/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="./assets/AdminLTE-3.2.0/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <style>
        body {
            background-color: #121212;
            /* Latar belakang gelap */
            color: white;
            /* Warna teks putih */
            font-family: 'Chakra Petch', sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #4e4e4e;
            /* Warna header */
            padding: 10px 0;
            position: relative;
        }

        .header-content {
            position: relative;
            text-align: center;
        }

        .header-content h1 {
            margin: 0;
        }

        h1 {
            margin: 0;
        }

        .container {
            display: flex;
        }

        .wrapper {
            width: 50%;
        }

        section {
            margin: 10px auto;
            padding: 10px;
            background-color: #1e1e1e;
            /* Latar belakang section */
            border-radius: 8px;
            max-width: 800px;
        }

        section h2 {
            text-align: center;
            border-bottom: 2px solid #00faff;
            /* Garis bawah pada judul */
            padding-bottom: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
            border: 1px solid #444;
            /* Border tabel */
        }

        th {
            background-color: #333;
        }

        td a {
            color: #00faff;
            /* Warna link yang berbeda */
            text-decoration: none;
        }

        td a:hover {
            text-decoration: underline;
        }

        .crud-buttons {
            display: flex;
            justify-content: center;
        }

        .crud-buttons form {
            margin: 0 5px;
        }

        button {
            padding: 5px 10px;
            font-family: 'Chakra Petch', sans-serif;
            border: none;
            border-radius: 5px;
            background-color: #00faff;
            color: #121212;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #007f9a;
        }

        form input,
        form textarea {
            display: block;
            width: calc(100% - 20px);
            /* Menghindari overflow */
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #444;
            /* Border input */
            border-radius: 5px;
            background-color: #222;
            /* Latar belakang input */
            color: white;
            /* Warna teks input */
        }

        form input::placeholder,
        form textarea::placeholder {
            color: #888;
            /* Warna placeholder */
        }

        /* Style untuk tombol logout */
        .logout-button {
            position: absolute;
            right: 20px;
            /* Jarak dari tepi kanan */
            top: 50%;
            transform: translateY(-50%);
            /* Agar tombol vertikal sejajar tengah */
            background-color: #ff4d4d;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .logout-button:hover {
            background-color: #cc0000;
        }

        #type {
            margin-bottom: 10px;
            width: 100%;
            padding: 10px 0;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <header>
        <div class="header-content">
            <h1>Halaman Admin FINDxDataTrace</h1>
            <form action="logout.php" method="POST">
                <button type="submit" class="logout-button">Logout</button>
            </form>
        </div>
    </header>

    <div class="container">
        <div class="wrapper">
            <section>
                <a href="reference/create.php">
                    <button style="width: 100%; font-weight: bold;">Tambah Referensi</button>
                </a>
            </section>

            <section>
                <h2>Daftar referensi</h2>
                <table>
                    <tr>
                        <th>Id</th>
                        <th>Nama Referensi</th>
                        <th>Type</th>
                        <th>Link</th>
                        <th>Website</th>
                        <th>Aksi</th>
                    </tr>
                    <?php

                    // Koneksi ke database
                    include_once('../../database/connection.php');

                    // Query untuk mengambil referensi
                    $sql = "SELECT * FROM reference"; // Sesuaikan dengan tabel dan kolom 
                    $result = $conn->query($sql);

                    // Menampilkan referensi dalam tabel
                    if ($result && $result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . htmlspecialchars($row['id']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['name']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['type']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['link']) . "</td>";

                            // Cek apakah kunci "link" ada dan tidak kosong
                            if (!empty($row['link'])) {
                                echo '<td><a href="' . htmlspecialchars($row['link']) . '" target="_blank">Baca lebih lanjut</a></td>';
                            } else {
                                echo '<td>Tidak ada link</td>';
                            }

                            echo '<td class="crud-buttons">';
                            echo '<form action="reference/edit.php" method="POST" style="display:inline;">';
                            echo '<input type="hidden" name="id" value="' . htmlspecialchars($row['id']) . '">';
                            echo '<button type="submit">Edit</button>';
                            echo '</form>';

                            echo '<form action="reference/functions/delete.php" method="POST" style="display:inline;">';
                            echo '<input type="hidden" name="id" value="' . htmlspecialchars($row['id']) . '">';
                            echo '<button type="submit">Hapus</button>';
                            echo '</form>';
                            echo '</td>';
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='6'>Tidak ada berita ditemukan.</td></tr>";
                    }
                    ?>
                </table>
            </section>
        </div>

        <div class="wrapper">
            <section>
                <a href="news/create.php">
                    <button style="width: 100%; font-weight: bold;">Tambah Berita</button>
                </a>
            </section>

            <section>
                <h2>Daftar Berita</h2>
                <table>
                    <tr>
                        <th>Id</th>
                        <th>Judul Berita</th>
                        <th>Kategori</th>
                        <th>Gambar</th>
                        <th>Link</th>
                        <th>Aksi</th>
                    </tr>
                    <?php

                    // Koneksi ke database
                    include_once('../../database/connection.php');

                    // Query untuk mengambil berita
                    $sql_news = "SELECT * FROM news order by created_at desc"; // Sesuaikan dengan tabel dan kolom Anda
                    $result_news = $conn->query($sql_news);

                    // Menampilkan berita dalam tabel
                    if ($result_news && $result_news->num_rows > 0) {
                        $no = 1;
                        while ($rows = $result_news->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $no . "</td>";
                            $no++;
                            echo "<td>" . htmlspecialchars($rows['title']) . "</td>";
                            echo "<td>" . htmlspecialchars($rows['category']) . "</td>";
                            if (!empty($rows['img'])) {
                                echo '<td>Gambar ada</td>';
                            } else {
                                echo '<td>Tidak ada gambar</td>';
                            }

                            // Cek apakah kunci "link" ada dan tidak kosong
                            if (!empty($rows['link'])) {
                                echo '<td><a href="' . htmlspecialchars($rows['link']) . '" target="_blank">Baca lebih lanjut</a></td>';
                            } else {
                                echo '<td>Tidak ada link</td>';
                            }

                            echo '<td class="crud-buttons">';
                            echo '<form action="news/edit.php" method="POST" style="display:inline;">';
                            echo '<input type="hidden" name="id" value="' . htmlspecialchars($rows['id']) . '">';
                            echo '<button type="submit">Edit</button>';
                            echo '</form>';

                            echo '<form action="news/functions/delete.php" method="POST" style="display:inline;">';
                            echo '<input type="hidden" name="id" value="' . htmlspecialchars($rows['id']) . '">';
                            echo '<button type="submit">Hapus</button>';
                            echo '</form>';
                            echo '</td>';
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='6'>Tidak ada berita ditemukan.</td></tr>";
                    }

                    // Menutup koneksi
                    $conn->close();
                    ?>
                </table>
            </section>
        </div>
    </div>





</body>
<!-- DataTables  & Plugins -->
<script src="./assets/AdminLTE-3.2.0/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="./assets/AdminLTE-3.2.0/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="./assets/AdminLTE-3.2.0/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="./assets/AdminLTE-3.2.0/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="./assets/AdminLTE-3.2.0/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="./assets/AdminLTE-3.2.0/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="./assets/AdminLTE-3.2.0/plugins/jszip/jszip.min.js"></script>
<script src="./assets/AdminLTE-3.2.0/plugins/pdfmake/pdfmake.min.js"></script>
<script src="./assets/AdminLTE-3.2.0/plugins/pdfmake/vfs_fonts.js"></script>
<script src="./assets/AdminLTE-3.2.0/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="./assets/AdminLTE-3.2.0/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="./assets/AdminLTE-3.2.0/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

</html>