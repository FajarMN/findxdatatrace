<?php

// Koneksi ke database
include_once('../../../../database/connection.php');

// Menangkap data dari form
$id = $_POST['id'];
$name= $_POST['name'];
$type = $_POST['type'];
$link = $_POST['link'];

// Memperbarui data alat
$sql = "UPDATE reference SET name='$name', type='$type', link='$link' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Alat berhasil diperbarui!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Menutup koneksi
$conn->close();

// Redirect kembali ke halaman admin
header("Location: ../../index.php");
exit();
?>
