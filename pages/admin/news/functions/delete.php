<?php

// Koneksi ke database
include_once('../../../../database/connection.php');

// Menangkap ID berita yang ingin dihapus
$id = $_POST['id'];

// Menghapus Gambar 
$sql = "SELECT img FROM news WHERE id = '$id'";
$result = $conn->query($sql);
$path = "../../uploads/";

// Menghapus berita berdasarkan ID
$sql = "DELETE FROM news WHERE id = '$id'";

if ($conn->query($sql) === TRUE) {
    echo "Berita berhasil dihapus!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Menutup koneksi
$conn->close();

// Redirect kembali ke halaman admin
header("Location: ../../berita.php");
exit();
