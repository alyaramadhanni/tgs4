

<?php
    // deve
    // $kon = mysqli_connect("localhost", "root",'',"sertifikasi");
    
    // production
    $kon=mysqli_connect("localhost","id8219133_root","sertifikasi","id8219133_sertifikasi");
    if (mysqli_connect_errno()) {
        echo "Koneksi database gagal : " .mysqli_connect_error();
    }
?>