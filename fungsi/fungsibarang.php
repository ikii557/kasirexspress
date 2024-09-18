<?php
    $host = "localhost";
    $user = "root";      // Nama pengguna database
    $pass = "";         
    $dbname = "appkasir"; // Nama database

    // Membuat koneksi
    $conn = mysqli_connect($host, $user, $pass, $dbname);
        
// barang.phpN

function getbarang(){
    global $conn;

    $querybarang = mysqli_query($conn, 'SELECT * FROM barang');
    
    $barang = mysqli_fetch_all($querybarang, MYSQLI_ASSOC);
    
    return $barang;
}

function getHargaBarang($barang_id) {
    global $conn;
    
    // Query untuk mendapatkan harga barang berdasarkan barang_id
    $query = "SELECT harga FROM barang WHERE id = $barang_id";
    $result = mysqli_query($conn, $query);
    
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        return $row['harga'];  // Mengembalikan harga barang
    } else {
        return 0;  // Jika barang tidak ditemukan
    }
}



//tambah barang
function tambahbarang($request){
    global $conn;

    $nama_barang    =$request['nama_barang'];
    $harga          =$request['harga'];
    $jml_stock      =$request['jml_stock'];

    if(empty($nama_barang)||empty($harga)||empty($jml_stock)){
           
        echo  "<script>
        alert('tidak boleh ada data yang kosong')
        </script>";
        return false;
    }


    


    $query = "INSERT INTO barang (nama_barang, harga, jml_stock) 
                VALUES ('$nama_barang','$harga','$jml_stock')";
     
    $er= mysqli_query($conn, $query);
     
    mysqli_query($conn, "INSERT INTO notifikasi (messege) VALUES(' barang telah di tambahkan')");
        

    return mysqli_affected_rows($conn);
}

function delete($id){
    global $conn;

    $query ="DELETE FROM barang WHERE id = $id";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function editbarang($data, $id){
    global $conn;
    
    // Mengambil data dari form
    $nama_barang            = mysqli_real_escape_string($conn, $data['nama_barang']);
    $harga                  = mysqli_real_escape_string($conn, $data['harga']);
    $jml_stock              = mysqli_real_escape_string($conn, $data['jml_stock']);
    if(empty($nama_barang)||empty($harga)||empty($jml_stock)){
           
        echo  "<script>
        alert('tidak  ada data yang diedit')
        </script>";
        return false;
    }
    
    
    // Query update data edit barang
    $queryeditbarang = "UPDATE barang SET 
                        nama_barang    = '$nama_barang',
                        harga          = '$harga',
                        jml_stock      = '$jml_stock'
                        WHERE id       = '$id' ";
                        
    
    mysqli_query($conn, $queryeditbarang);
    
    return mysqli_affected_rows($conn);
    }
?>

