<?php
include('koneksi.php');

$tag        = $_POST['tag_anggota'];
$nama       = $_POST['nama_anggota'];
$email      = $_POST['email_anggota'];
$whatsapp   = $_POST['whatsapp_anggota'];

$input      = mysqli_query($koneksi, "INSERT INTO anggota (tag_anggota, nama_anggota, email_anggota, whatsapp_anggota) VALUES ('$tag', '$nama', '$email', '$whatsapp')");

if($input == TRUE){
    header("location: anggota.php");
}else{
    
}