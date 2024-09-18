<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "appkasir"; // Sesuaikan dengan nama database Anda

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Query untuk mendapatkan data transaksi berdasarkan tanggal dan total transaksi
$sql = "SELECT tanggal, SUM(total_harga) as total_transaksi FROM transaksi GROUP BY  tanggal ORDER BY tanggal ASC";
$result = $conn->query($sql);

// Array untuk menyimpan data
$dates = [];
$totals = [];

// Ambil data dan masukkan ke array
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $dates[] = $row['tanggal'];
        $totals[] = $row['total_transaksi'];
    }
}

// Tutup koneksi
$conn->close();

// Kirim data dalam format JSON
// echo json_encode([
//     'dates' => $dates,
//     'totals' => $totals
// ]);
?>
