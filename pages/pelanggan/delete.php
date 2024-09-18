<?php
    require '../../fungsi/fungsipelanggan.php';
    


    $id = $_GET['id'];

    if (delete($id) > 0){
        echo "<script>
                alert('Data pelanggan berhasil dihapus');
                document.location.href='pelanggan.php';
              </script>";
    } else {
        echo "<script>
                alert('Data pelanggan gagal dihapus');
                document.location.href='pelanggan .php';
              </script>";
    }

    
    
?>
