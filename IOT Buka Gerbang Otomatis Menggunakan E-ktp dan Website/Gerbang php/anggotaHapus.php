<?php
include('koneksi.php');
$no = $_GET['no'];
mysqli_query($koneksi, "DELETE FROM anggota WHERE no='$no' ");
header('location: anggota.php');
