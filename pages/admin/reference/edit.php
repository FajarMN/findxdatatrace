<?php

// Koneksi 
include_once('../../../database/connection.php');

// Menangkap ID alat yang ingin diedit
$id = $_POST['id'];

// Mendapatkan data alat berdasarkan ID
$sql = "SELECT * FROM reference WHERE id = '$id'";
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
            <h1>Edit Referensi - FINDxDataTrace</h1>
        </header>

        <section>
            <h2>Form Edit Referensi</h2>
            <form action="functions/update.php" method="POST">
                <label class="mb-1">Nama Referensi</label>
                <input type="text" value="<?php echo htmlspecialchars($row['name']); ?>" name="name" placeholder="<?php echo htmlspecialchars($row['name']); ?>" required>
                <label class="mb-1">Keterangan Referensi</label>
                <input type="text" value="<?php echo htmlspecialchars($row['keterangan']); ?>" name="keterangan" placeholder="<?php echo htmlspecialchars($row['keterangan']); ?>" required>
                <label class="mb-3">Kategori</label>
                <select name="type" id="type">
                    <option value="Osint" <?php if ($row['category'] == 'Osint') echo 'selected'; ?>>Osint</option>
                    <option value="Geoint" <?php if ($row['category'] == 'Geoint') echo 'selected'; ?>>Geoint</option>
                    <option value="Socmint" <?php if ($row['category'] == 'Socmint') echo 'selected'; ?>>Socmint</option>
                    <option value="Humint" <?php if ($row['category'] == 'Humint') echo 'selected'; ?>>Humint</option>
                    <option value="Cybint" <?php if ($row['category'] == 'Cybint') echo 'selected'; ?>>Cybint</option>
                </select>
                <label class="mb-1">Tautan</label>
                <input type="text" value="<?php echo htmlspecialchars($row['link']); ?>" name="link" placeholder="<?php echo htmlspecialchars($row['link']); ?>">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <button type="submit">Edit Referensi</button>
            </form>

            <a href="../referensi.php">
                <button style="background-color: red; margin-top: 10px; color: white">Kembali</button>
            </a>
        </section>

    <?php
} else {
    echo "<section><h2>Referensi tidak ditemukan.</h2></section>";
}

// Menutup koneksi
$conn->close();
    ?>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

    </html>