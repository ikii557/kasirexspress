<?php
    $host = "localhost"; // Alamat server database
    $user = "root";      // Nama pengguna database
    $pass = "";          // Kata sandi database
    $dbname = "appkasir"; // Nama database

    // Membuat koneksi
    $conn = mysqli_connect($host, $user, $pass, $dbname);
    
    if (!$conn) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }

    // Fungsi untuk mengambil semua data transaksi
    function getTransaksi() {
        global $conn;
    
        // Query untuk mengambil semua data dari tabel transaksi
        $queryTransaksi = mysqli_query($conn, 'SELECT 
                                               transaksi.id AS transaksi_id,
                                               pelanggan.nama AS nama_pelanggan,
                                               barang.nama_barang,
                                               transaksi.jml_barangdibeli,
                                               transaksi.total_harga,
                                               metode_pembayaran
                                               FROM transaksi  
                                               JOIN pelanggan ON transaksi.pelanggan_id = pelanggan.id  
                                               JOIN barang ON transaksi.barang_id = barang.id');
        
        // Mengambil semua hasil query dalam bentuk array asosiatif
        $transaksi = mysqli_fetch_all($queryTransaksi, MYSQLI_ASSOC);
        
        return $transaksi;
    }

    // Fungsi untuk mengambil semua data pelanggan
    function getPelanggan() {
        global $conn;
    
        // Query untuk mengambil semua data dari tabel pelanggan
        $queryPelanggan = mysqli_query($conn, 'SELECT * FROM pelanggan');
        
        // Mengambil semua hasil query dalam bentuk array asosiatif
        $pelanggan = mysqli_fetch_all($queryPelanggan, MYSQLI_ASSOC);
        
        return $pelanggan;
    }

    // Fungsi untuk menambahkan transaksi
    function tambahTransaksi($request){
        global $conn;
    
        $pelanggan_id       = mysqli_real_escape_string($conn, $request['pelanggan']);
        $barang_id          = mysqli_real_escape_string($conn, $request['barang']);
        $jml_barangdibeli   = mysqli_real_escape_string($conn, $request['jumlah_barang']);
        $total_harga        = mysqli_real_escape_string($conn, $request['total_harga']);
        $metode_pembayaran  = mysqli_real_escape_string($conn, $request['metode_pembayaran']);
        if(empty($pelanggan_id)||empty($barang_id)||empty($jml_barangdibeli)||empty($total_harga)||empty($metode_pembayaran)){
           
            echo  "<script>
            alert('tidak boleh ada data yang kosong')
            </script>";
            return false;
        }
    
        $queryinsert = "INSERT INTO transaksi (pelanggan_id, barang_id, jml_barangdibeli, total_harga, metode_pembayaran) 
                        VALUES ('$pelanggan_id','$barang_id','$jml_barangdibeli','$total_harga','$metode_pembayaran')";
        mysqli_query($conn, $queryinsert);
        mysqli_query($conn, "INSERT INTO notifikasi (messege) VALUES(' berhasil melakukan transaksi')");
        
        return mysqli_affected_rows($conn);
    }

    // Fungsi untuk mengambil semua data barang
    function getbarang(){
        global $conn;
    
        $queryBarang = mysqli_query($conn, 'SELECT * FROM barang');
        
        $barang = mysqli_fetch_all($queryBarang, MYSQLI_ASSOC);
        
        return $barang;
    }
    
    // Fungsi untuk menghapus transaksi
    function delete($id){
        global $conn;

        $query ="DELETE FROM transaksi WHERE id = $id";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }
    
    // Fungsi untuk mengurangi stok barang setelah pembelian
    function kurangiStok($barang_id, $jml_barangdibeli) {
        global $conn;
    
        // Update stok barang setelah pembelian
        $update_query = "UPDATE barang SET stok = stok - $jml_barangdibeli WHERE id = $barang_id";
        mysqli_query($conn, $update_query);
    }

    // Fungsi untuk mengedit transaksi
    function edittransaksi($data, $id){
        global $conn;

        // Mengambil data dari form
        $nama_pelanggan       = mysqli_real_escape_string($conn, $data['nama_pelanggan']);
        $nama_barang          = mysqli_real_escape_string($conn, $data['nama_barang']);
        $jml_barangdibeli   = mysqli_real_escape_string($conn, $data['jml_barangdibeli']);
        $total_harga        = mysqli_real_escape_string($conn, $data['total_harga']);
        $metode_pembayaran  = mysqli_real_escape_string($conn, $data['metode_pembayaran']);
        if(empty($nama_pelanggan)||empty($nama_barang)||empty($jml_barangdibeli)||empty($total_harga)||empty($metode_pembayaran)){
           
            echo  "<script>
            alert('tidak boleh ada data yang diedit')
            </script>";
            return false;
        }
    
        //Query update data transaksi
        $queryTransaksi = "UPDATE transaksi SET 
                            nama_pelanggan        = '$nama_pelanggan',
                            nama_barang           = '$nama_barang',
                            jml_barangdibeli    = '$jml_barangdibeli',
                            total_harga         = '$total_harga',
                            metode_pembayaran   = '$metode_pembayaran'
                            WHERE id            = $id";
        
        mysqli_query($conn, $queryTransaksi);
    
        return mysqli_affected_rows($conn);
    }

?>
