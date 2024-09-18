<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "appkasir"; // Nama database kamu

// Membuat koneksi
$conn =  mysqli_connect($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query untuk mengambil data dari tabel notifikasi
function getPelanggan() {
    global $conn;
    
    // Query untuk mengambil semua data dari tabel pelanggan
    $queryPelanggan = mysqli_query($conn, 'SELECT * FROM pelanggan');
    
    // Mengambil semua hasil query dalam bentuk array asosiatif
    $pelanggan = mysqli_fetch_all($queryPelanggan, MYSQLI_ASSOC);
    
    $notifikasi =  mysqli_query($conn, "INSERT INTO notifikasi (messege) VALUES(' bergambung sebagai pelanggan')");
    
    return $notifikasi;
    return mysqli_affected_rows($conn);;
}


function getbarang(){
    global $conn;

    $querybarang = mysqli_query($conn, 'SELECT * FROM barang');
    
    $barang = mysqli_fetch_all($querybarang, MYSQLI_ASSOC);

    $notifikas  =  mysqli_query($conn, "INSERT INTO notifikasi (messege) VALUES(' bergambung sebagai pelanggan')");
    
    return $notifikas;
    
    return $barang;
}
?>
