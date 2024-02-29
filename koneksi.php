<?php
$koneksi = mysqli_connect("localhost","root","","kasir_aisyah");

if(mysqli_connect_errno()){
    echo "koneksi database gagal : " . mysqli_connect_error();
}

?>