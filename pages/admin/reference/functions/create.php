<?php

// Koneksi ke database
include_once('../../../../database/connection.php');

// Menangkap data dari form
$name = $_POST['name'];
$keterangan = $_POST['keterangan'];
$type = $_POST['type'];
$link = $_POST['link'];

// Menyisipkan data ke tabel alat
$sql = "INSERT INTO reference (name, keterangan ,category, link) VALUES ('$name','$keterangan' ,'$type', '$link')";

if ($conn->query($sql) === TRUE) {
    echo "Alat berhasil ditambahkan!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Menutup koneksi
$conn->close();

// Redirect kembali ke halaman admin
header("Location: ../../referensi.php");
exit();
