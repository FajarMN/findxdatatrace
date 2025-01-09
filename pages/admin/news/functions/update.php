<?php

// Koneksi ke database
include_once('../../../../database/connection.php');

// Menangkap data dari form
$id = $_POST['id'];
$title = $_POST['title'];
$category = $_POST['category'];
$img = $_FILES["img"]["name"];
$postedImg = $_POST['postedImage'];
$link = $_POST['link'];
$datetime = date('Y-m-d H:i:s');

// Directory
$target_dir = '../uploads/';
$target_file = $target_dir . basename($_FILES["img"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["img"]["tmp_name"]);
    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk;
    // Allow certain file formats= 0;
}

// Check file size
if ($_FILES["img"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Allow certain file formats

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
        echo "The file " . basename($_FILES["img"]["name"]) . " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

// Memperbarui data berita
$sql = "UPDATE news SET title = '$title', category = '$category', img = '$img', link = '$link', created_at = '$datetime' WHERE id = '$id'";
if ($conn->query($sql) === TRUE) {
    echo "Berita berhasil diperbarui!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Menutup koneksi
$conn->close();

// Redirect kembali ke halaman admin
header("Location: ../../index.php");
exit();
?>
