<?php

// Koneksi ke database
include_once('../../../../database/connection.php');

// Menangkap data dari form
$id = $_POST['id'];
$name = $_POST['name'];
$keterangan = $_POST['keterangan'];
$type = $_POST['type'];
$link = $_POST['link'];

// Memperbarui data alat
$sql = "UPDATE reference SET name='$name', keterangan='$keterangan',category='$type', link='$link' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Alat berhasil diperbarui!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Menutup koneksi
$conn->close();

// Redirect kembali ke halaman admin
header("Location: ../../referensi.php");
exit();
