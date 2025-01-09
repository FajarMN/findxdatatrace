<?php

// Koneksi 
include_once('../../../database/connection.php');

// Menangkap ID berita yang ingin diedit
$id = $_POST['id'];

// Mendapatkan data berita berdasarkan ID
$sql = "SELECT * FROM news WHERE id = '$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
?>
    <!DOCTYPE html>
    <html lang="id">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit Referensi - FINDxDataTrace</title>
        <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@400;700&display=swap" rel="stylesheet">
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

            section {
                margin: 20px auto;
                padding: 20px;
                background-color: #4e4e4e;
                /* Latar belakang section */
                border-radius: 8px;
                max-width: 800px;
            }

            h2 {
                text-align: center;
                border-bottom: 2px solid #00faff;
                /* Garis bawah pada judul */
                padding-bottom: 10px;
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

            button {
                padding: 10px;
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
            <h1>Edit Berita - FINDxDataTrace</h1>
        </header>

        <section>
            <h2>Form Edit Berita</h2>
            <form action="functions/update.php" method="POST" enctype="multipart/form-data">
                    <input type="text" name="title" placeholder="<?php echo $row['title']; ?>" value="<?php echo $row['title']; ?>" required>
                    <select name="category" id="type">
                        <option value="Osint" <?php if ($row['category'] == 'Osint') echo 'selected'; ?>>Osint</option>
                        <option value="Geoint" <?php if ($row['category'] == 'Geoint') echo 'selected'; ?>>Geoint</option>
                        <option value="Socmint" <?php if ($row['category'] == 'Socmint') echo 'selected'; ?>>Socmint</option>
                        <option value="Humint" <?php if ($row['category'] == 'Humint') echo 'selected'; ?>>Humint</option>
                        <option value="Cybint" <?php if ($row['category'] == 'Cybint') echo 'selected'; ?>>Cybint</option>
                    </select>
                    <input type="file" name="img" id="img">
                    <input type="text" name="link" placeholder="<?php echo $row['link']; ?>" value="<?php echo $row['link']; ?>">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <input type="hidden" name="postedImage" value="<?php echo $row['img']; ?>">
                    <button type="submit">Edit Berita</button>
                </form>
                <a href="../index.php" style="text-decoration: none;">
                    <button style="background-color: #cc0000; color: white; margin-top: 10px;">Kembali</button>
                </a>
        </section>

    <?php
} else {
    echo "<section><h2>Berita tidak ditemukan.</h2></section>";
}

// Menutup koneksi
$conn->close();
    ?>