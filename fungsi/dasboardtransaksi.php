<?php
// Koneksi ke database
$host = "localhost";
$username = "root";
$password = "";
$database = "appkasir";

$conn = mysqli_connect($host, $username, $password, $database);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Query untuk menghitung jumlah transaksi
$sql = "SELECT COUNT(*) as total FROM transaksi";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Ambil hasil query
    $row = $result->fetch_assoc();
    $total_transaksi = $row['total'];
} else {
    $total_transaksi = 0;
}

$conn->close();
?>
