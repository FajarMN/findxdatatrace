<?php
session_start();
include_once('../../database/connection.php');

// Cek apakah pengguna sudah login
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("location: login.php");
    exit;
}

// Menangani filter berdasarkan kategori (menggunakan GET untuk mendapatkan filter)
$filterCategory = isset($_GET['filter_category']) ? $_GET['filter_category'] : '';

// Menyusun query berdasarkan filter kategori
$query = "SELECT * FROM news";
if (!empty($filterCategory)) {
    $query .= " WHERE category = '" . mysqli_real_escape_string($conn, $filterCategory) . "'";
}
$query .= " ORDER BY created_at DESC";

// Eksekusi query
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - FINDxDataTrace</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@400;700&display=swap" rel="stylesheet">
    <!-- DataTables -->
    <link rel="stylesheet" href="../../assets/AdminLTE-3.2.0/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../assets/AdminLTE-3.2.0/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../../assets/AdminLTE-3.2.0/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../assets/AdminLTE-3.2.0/dist/css/adminlte.min.css">

    <style>
        body {
            background-color: #121212;
            color: white;
            font-family: 'Chakra Petch', sans-serif;
        }

        header {
            background-color: #4e4e4e;
            padding: 10px 0;
            position: relative;
        }

        .header-content {
            position: relative;
            text-align: center;
        }

        .header-content h1 {
            margin: 0;
        }

        h1 {
            margin: 0;
        }

        /* .container {
            display: flex;
        } */

        /* .wrapper {
            width: 50%;
        } */

        button {
            padding: 5px 10px;
            font-family: 'Chakra Petch', sans-serif;
            border: none;
            border-radius: 5px;
            background-color: #00faff;
            color: #121212;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #007f9a;
        }

        /* Style untuk tombol logout */
        .logout-button {
            position: absolute;
            right: 20px;
            /* Jarak dari tepi kanan */
            top: 50%;
            transform: translateY(-50%);
            /* Agar tombol vertikal sejajar tengah */
            background-color: #ff4d4d;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .logout-button:hover {
            background-color: #cc0000;
        }
    </style>
</head>

<body>
    <header>
        <div class="header-content">
            <h1>Halaman Admin FINDxDataTrace</h1>
            <form action="logout.php" method="POST">
                <button type="submit" class="logout-button">Logout</button>
            </form>
        </div>
    </header>
    <nav style="padding-bottom: 5px; padding-top: 5px;">
        <div class="nav-wrapper">
            <a href="#">Berita</a>
            <a href="referensi.php">Referensi</a>
        </div>
    </nav>

    <div class="container">
        <div class="wrapper">
            <!-- Form Filter -->
            <form class="filter-form" method="get" action="../admin/berita.php ">
                <label for="filter_category">Filter Berdasarkan Kategori:</label>
                <select name="filter_category" id="filter_category">
                    <option value="">Semua</option>
                    <option value="Osint" <?= isset($_GET['filter_category']) && $_GET['filter_category'] == 'Osint' ? 'selected' : '' ?>>Osint</option>
                    <option value="Geoint" <?= isset($_GET['filter_category']) && $_GET['filter_category'] == 'Geoint' ? 'selected' : '' ?>>Geoint</option>
                    <option value="Humint" <?= isset($_GET['filter_category']) && $_GET['filter_category'] == 'Humint' ? 'selected' : '' ?>>Humint</option>
                    <option value="Cybint" <?= isset($_GET['filter_category']) && $_GET['filter_category'] == 'Cybint' ? 'selected' : '' ?>>Cybint</option>
                    <option value="Socmint" <?= isset($_GET['filter_category']) && $_GET['filter_category'] == 'Socmint' ? 'selected' : '' ?>>Socmint</option>
                </select>
                <button type="submit">Filter</button>
            </form>

            <section>
                <a href="reference/create.php">
                    <button style="width: 100%; font-weight: bold;">Tambah Referensi</button>
                </a>
            </section>

            <section>
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-center" width="1%">No</th>
                                <th class="text-center" width="1%">Title</th>
                                <th class="text-center">Category</th>
                                <th class="text-center">img</th>
                                <th class="text-center">link</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include_once('../../database/connection.php');
                            $result = mysqli_query($conn, "select * from news order by created_at desc");
                            ?>
                            <?php
                            $no = 1;
                            while ($user_data = mysqli_fetch_array($result)) { ?>
                                <tr>
                                    <td>
                                        <?php
                                        echo
                                        $no;
                                        $no++; ?>
                                    </td>
                                    <td><?php echo $user_data['title']; ?></td>
                                    <td><?php echo $user_data['category']; ?></td>
                                    <td><?php if (!empty($user_data['img'])) {
                                            echo '<a href="' . htmlspecialchars($user_data['link']) . '" target="_blank">Baca lebih lanjut</a>';
                                        } else {
                                            echo 'Tidak ada gambar';
                                        }; ?>
                                    </td>
                                    <td><?php if (!empty($user_data['link'])) {
                                            echo '<a href="' . htmlspecialchars($user_data['link']) . '" target="_blank">Baca lebih lanjut</a>';
                                        } else {
                                            echo 'Tidak ada link';
                                        }; ?>
                                    </td>
                                    <td class="crud-buttons">
                                        <form action="news/edit.php" method="post">
                                            <?php echo '<input type="hidden" name="id" value="' . htmlspecialchars($user_data['id']) . '">'; ?>
                                            <button type="submit">Edit</button>
                                        </form>
                                        <form action="reference/functions/delete.php">
                                            <?php echo '<input type="hidden" name="id" value="' . htmlspecialchars($user_data['id']) . '">'; ?>
                                            <button type="submit">Hapus</button>
                                        </form>

                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </div>





</body>
<!-- jQuery -->
<script src="../../assets/AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../assets/AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../../assets/AdminLTE-3.2.0/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../assets/AdminLTE-3.2.0/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../assets/AdminLTE-3.2.0/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../assets/AdminLTE-3.2.0/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../assets/AdminLTE-3.2.0/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../assets/AdminLTE-3.2.0/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../assets/AdminLTE-3.2.0/plugins/jszip/jszip.min.js"></script>
<script src="../../assets/AdminLTE-3.2.0/plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../assets/AdminLTE-3.2.0/plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../assets/AdminLTE-3.2.0/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../assets/AdminLTE-3.2.0/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../assets/AdminLTE-3.2.0/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>


<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>

</html>