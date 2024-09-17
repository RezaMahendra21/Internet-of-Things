<?php
include('koneksi.php');
$no = $_GET['no'];
mysqli_query($koneksi, "DELETE FROM data WHERE no='$no' ");
header('location: data.php');
