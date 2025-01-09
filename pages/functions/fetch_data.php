<?php
function fetchData($conn, $filterCategory = "")
{
    // Jika filter dipilih
    if (!empty($filterCategory)) {
        $query = "SELECT * FROM reference WHERE category = ? ORDER BY created_at DESC";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $filterCategory);
        $stmt->execute();
        return $stmt->get_result();
    } else {
        // Jika tidak ada filter
        $query = "SELECT * FROM reference ORDER BY created_at DESC";
        return mysqli_query($conn, $query);
    }
}
