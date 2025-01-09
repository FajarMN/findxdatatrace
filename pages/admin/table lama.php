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
<div class=" wrapper">
    <section>
        <a href="news/create.php">
            <button style="width: 100%; font-weight: bold;">Tambah Berita</button>
        </a>
    </section>

    <section>
        <h2>Daftar Berita</h2>

    </section>
</div>