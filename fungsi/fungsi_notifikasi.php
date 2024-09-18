<?php
  $host = "localhost"; // Alamat server database
  $user = "root";      // Nama pengguna database
  $pass = "";          // Kata sandi database
  $dbname = "appkasir"; // Nama database

  // Membuat koneksi
  $conn = mysqli_connect($host, $user, $pass, $dbname);
  
//tambah pelanggan
function tambahpelanggan($request){
    global $conn;

    $nama           =$request['nama'];
    $email          =$request['email'];
    $no_hp          =$request['no_hp'];
    
    $query_users = mysqli_query($conn, "SELECT email FROM pelanggan WHERE email = '$email'");
    


    $query = "INSERT INTO pelanggan (nama, email, no_hp) 
                VALUES ('$nama','$email','$no_hp')";
    mysqli_query($conn, $query);

    mysqli_query($conn, "INSERT INTO notifikasi (messege) VALUES('Pelanggan 1 bergambung sebagai pelanggan')");

    return mysqli_affected_rows($conn);
}
?>