<?php
// Koneksi ke database
$host = "localhost";
$username = "root";
$password = "";
$database = "appkasir";

$conn = mysqli_connect($host, $username, $password, $database);


// Query untuk menghitung jumlah pelanggan
$sql = "SELECT COUNT(*) as total FROM pelanggan";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Ambil hasil query
    $row = $result->fetch_assoc();
    $total_pelanggan = $row['total'];
} else {
    $total_pelanggan = 0;
}

$conn->close();
?>
