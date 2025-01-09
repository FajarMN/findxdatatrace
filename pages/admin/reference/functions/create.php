<?php

// Koneksi ke database
include_once('../../../../database/connection.php');

// Menangkap data dari form
$name = $_POST['name'];
$type = $_POST['type'];
$link = $_POST['link'];

// Menyisipkan data ke tabel alat
$sql = "INSERT INTO reference (name, type, link) VALUES ('$name', '$type', '$link')";

if ($conn->query($sql) === TRUE) {
    echo "Alat berhasil ditambahkan!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Menutup koneksi
$conn->close();

// Redirect kembali ke halaman admin
header("Location: ../../index.php");
exit();
?>
