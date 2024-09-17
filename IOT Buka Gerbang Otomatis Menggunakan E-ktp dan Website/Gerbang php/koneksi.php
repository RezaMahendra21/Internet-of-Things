<?php
$server     = "localhost";
$username   = "u8110790_db_kantor";
$password   = "metalbest149";
$database   = "u8110790_db_kantor";

$koneksi = mysqli_connect($server, $username, $password, $database);
if($koneksi == TRUE){
    // echo "Berhasil";
}else{
    echo "Gagal";
}
