<?php
    
    
    $host = "localhost"; // Alamat server database
    $user = "root";      // Nama pengguna database
    $pass = "";          // Kata sandi database
    $dbname = "appkasir"; // Nama database

    // Membuat koneksi
    $conn = mysqli_connect($host, $user, $pass, $dbname);
    
//register
function register($request){
    global $conn;
    //tampung semua data kevariabel
    $email      =htmlspecialchars(strtolower(stripcslashes($request["email"])));
    $password   =htmlspecialchars(mysqli_real_escape_string( $conn , $request["password"]));

    
    $query_users = mysqli_query($conn, "SELECT email FROM users WHERE email = '$email'");
    $_SESSION['login']=true;
    if(empty($email)||empty($password)){
        echo  "<script>
            alert('tidak boleh ada data yang kosoong')
            </script>";
    return false;

    if(mysqli_fetch_all($query_users , MYSQLI_ASSOC )){
            echo "<script>
                    alert('email sudah terdaftar')
                    document.location.href='.php'
                  </script>";
        return false;
        }
    }

            
    $newpassword=password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO users (email,password) VALUES('$email','$newpassword')";
    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);
}  
//login
    function login($request){
        global $conn;
        //tampung data login
        $email      =htmlspecialchars(strtolower(stripcslashes($request["email"])));
        $password   =htmlspecialchars(mysqli_real_escape_string( $conn , $request["password"]));

        $erorlogin="Email / password yang anda masukan salah";

        //data user di table user
        $query_users= mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");

        if(mysqli_num_rows($query_users) == 1){
            $datausers= mysqli_fetch_assoc($query_users);
            if(password_verify($password,$datausers['password'])){
                $_SESSION['login']=true;
                header('location:index.php');
                exit;
            }else {
                return $erorlogin;
            }
        }

        return $erorlogin;
        
    }
?>