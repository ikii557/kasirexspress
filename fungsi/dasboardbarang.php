<?php
// Koneksi ke database
$host = "localhost";
$username = "root";
$password = "";
$database = "appkasir";

$conn = mysqli_connect($host, $username, $password, $database);



// Query untuk menghitung jumlah barang
        $sql = "SELECT COUNT(*) as total FROM barang";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Ambil hasil query
            $row = $result->fetch_assoc();
            $total_barang = $row['total'];
        } else {
            $total_barang = 0;
        }

        $conn->close();

?>
