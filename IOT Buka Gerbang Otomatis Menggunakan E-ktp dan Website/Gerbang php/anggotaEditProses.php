<?php
include('koneksi.php');

$no         = $_POST['no'];
$tag        = $_POST['tag_anggota'];
$nama       = $_POST['nama_anggota'];
$email      = $_POST['email_anggota'];
$whatsapp   = $_POST['whatsapp_anggota'];

$input      = mysqli_query($koneksi, "UPDATE anggota SET tag_anggota='$tag', nama_anggota='$nama', email_anggota='$email', whatsapp_anggota='$whatsapp' WHERE no='$no' ");

if ($input == TRUE) {
    header("location: anggota.php");
} else {
}
