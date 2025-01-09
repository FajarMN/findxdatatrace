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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

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
            text-align: center;
            padding: 10px 0;
            background-color: #4e4e4e;
            /* Warna header */
        }

        h1 {
            margin: 0;
        }

        .container {
            display: flex;
        }

        .wrapper {
            width: 100%;
        }

        section {
            margin: 20px auto;
            padding: 20px;
            background-color: #4e4e4e;
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
            background-color: #ff4d4d;
            /* Warna merah untuk tombol logout */
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 10px;
        }

        .logout-button:hover {
            background-color: #cc0000;
            /* Merah lebih gelap saat hover */
        }

        #type {
            margin-bottom: 10px;
            width: 100%;
            padding: 10px 0;
            font-weight: bold;
        }

        .label-name {
            margin-top: 500px;
        }
    </style>
</head>

<body>
    <header>
        <h1>Halaman Tambah Referensi FINDxDataTrace</h1>
    </header>

    <div class="container">
        <div class="wrapper">
            <section>
                <h2>Tambah referensi Baru</h2>
                <form action="functions/create.php" method="POST">
                    <label class="mb-1">Nama Referensi</label>
                    <input type="text" name="name" placeholder="Nama Referensi" required>
                    <label class="mb-1">Keterangan</label>
                    <input type="text" name="keterangan" placeholder="Keterangan Referensi" required>
                    <label class="mb-3">Kategori</label>
                    <select name="type" id="type">
                        <option value="Osint">Osint</option>
                        <option value="Geoint">Geoint</option>
                        <option value="Socmint">Socmint</option>
                        <option value="Humint">Humint</option>
                        <option value="Cybint">Cybint</option>
                    </select>
                    <label class="mb-1">Tautan</label>
                    <input type="text" name="link" placeholder="Tautan Referensi">
                    <button type="submit">Tambah Referensi</button>
                </form>
                <a href="../referensi.php" style="text-decoration: none;">
                    <button style="background-color: #cc0000; color: white; margin-top: 10px;">Kembali</button>
                </a>
            </section>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</html>