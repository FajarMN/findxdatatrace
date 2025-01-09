<?php
include_once('../../database/connection.php');

// Query untuk mendapatkan data dari tabel berita
$query = "SELECT * FROM news order by created_at desc";
$result = $conn->query($query);

$data = [];

// Memasukkan data ke dalam array
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

// Menutup koneksi
$conn->close();

// Mengembalikan data
return $data;
