<?php

// Koneksi ke database
include_once('../../../../database/connection.php');

// Menangkap ID alat yang ingin dihapus
$id = $_POST['id'];

// Menghapus alat berdasarkan ID
$sql = "DELETE FROM reference WHERE id = '$id'";

if ($conn->query($sql) === TRUE) {
    echo "Alat berhasil dihapus!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Menutup koneksi
$conn->close();

// Redirect kembali ke halaman admin
header("Location: ../../referensi.php");
exit();
