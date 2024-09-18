<?php
    $host = "localhost"; // Alamat server database
    $user = "root";      // Nama pengguna database
    $pass = "";          // Kata sandi database
    $dbname = "appkasir"; // Nama database

    // Membuat koneksi
    $conn = mysqli_connect($host, $user, $pass, $dbname);
    
// barang.phpN


function getPelanggan() {
    global $conn;
    
    // Query untuk mengambil semua data dari tabel pelanggan
    $queryPelanggan = mysqli_query($conn, 'SELECT * FROM pelanggan');
    
    // Mengambil semua hasil query dalam bentuk array asosiatif
    $pelanggan = mysqli_fetch_all($queryPelanggan, MYSQLI_ASSOC);
    
    return $pelanggan;
}
function search($search){
    global $conn;
    $querypelanggan = mysqli_query($conn, "SELECT * FROM pelanggan WHERE nama LIKE '%$search%' OR email LIKE '%$search%' OR no_hp LIKE '%$search%'");
    $pelanggan = mysqli_fetch_all($querypelanggan, MYSQLI_ASSOC);
    return $pelanggan;
}

//tambah pelanggan
function tambahpelanggan($request){
    global $conn;

    $nama           =$request['nama'];
    $email          =$request['email'];
    $no_hp          =$request['no_hp'];
    
    $query_users = mysqli_query($conn, "SELECT email FROM pelanggan WHERE email = '$email'");
    if(empty($nama)||empty($email)||empty($no_hp)){
           
        echo  "<script>
        alert('tidak boleh ada data yang kosong')
        </script>";
        return false;
    }

    if(mysqli_fetch_all($query_users , MYSQLI_ASSOC )){
        echo "<script>
                alert('email sudah terdaftar')
                document.location.href='../pages/pelanggan/add_pelanggan.php'
              </script>";
    return false;
    }

    

    $query = "INSERT INTO pelanggan (nama, email, no_hp) 
                VALUES ('$nama','$email','$no_hp')";
    mysqli_query($conn, $query);

    mysqli_query($conn, "INSERT INTO notifikasi (messege) VALUES(' bergambung sebagai pelanggan')");
        
    return mysqli_affected_rows($conn);
}

// Fungsi untuk edit pelanggan
function editpelanggan($data, $id){
    global $conn;

    // Mengambil data dari form
    $nama = mysqli_real_escape_string($conn, $data['nama']);
    $email = mysqli_real_escape_string($conn, $data['email']);
    $no_hp = mysqli_real_escape_string($conn, $data['no_hp']);

    if(empty($nama)||empty($email)||empty($no_hp)){
           
        echo  "<script>
        alert('tidak boleh ada data yang diedit')
        </script>";
        return false;
    }

    // Query update data pelanggan
    $querypelanggan = "UPDATE pelanggan SET 
                nama         = '$nama',
                email       = '$email',
                no_hp        = '$no_hp'
                WHERE id     =  $id";

    mysqli_query($conn, $querypelanggan);
    return mysqli_affected_rows($conn);
}
//delete pelanggan
function delete($id){
    global $conn;

    $query ="DELETE FROM pelanggan WHERE id = $id";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


?>