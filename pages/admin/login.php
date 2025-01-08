<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validasi kredensial (ini seharusnya memeriksa dengan database pengguna Anda)
    if ($username === 'admin' && $password === 'admin123') {
        $_SESSION['username'] = $username; // Set variabel sesi
        $_SESSION['loggedin'] = true; // Set status login
        header('Location: index.php'); // Redirect ke halaman admin
        exit();
    } else {
        $error = "Invalid username or password.";
    }
}

// Cek apakah pengguna sudah login
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header("location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - FINDxDFC</title>
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #4e4e4e; /* Latar belakang gelap */
            color: white; /* Warna teks putih */
            font-family: 'Chakra Petch', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        form {
            background-color: #1e1e1e; /* Latar belakang form */
            padding: 20px;
            border-radius: 8px;
            width: 300px;
            text-align: center;
        }
        input {
            width: calc(100% - 20px); /* Menghindari overflow */
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #444; /* Border input */
            border-radius: 5px;
            background-color: #222; /* Latar belakang input */
            color: white; /* Warna teks input */
        }
        button {
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #00faff;
            color: #121212;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 10px; /* Tambahkan jarak atas */
        }
        button:hover {
            background-color: #007f9a;
        }
        .error {
            color: red;
        }
        .back-button {
            background-color: #ffcc00; /* Warna latar belakang tombol kembali */
            color: #121212; /* Warna teks tombol kembali */
            margin-top: 10px; /* Tambahkan jarak atas */
        }
        .back-button:hover {
            background-color: #e6b800; /* Warna saat hover tombol kembali */
        }
    </style>
</head>
<body>
    <form action="" method="POST">
        <h2>Login</h2>
        <?php if (isset($error)) echo '<div class="error">' . $error . '</div>'; ?>
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
        <a href="../../index.php"><button type="button" class="back-button">Kembali</button></a> <!-- Tombol Kembali -->
    </form>
</body>
</html>
