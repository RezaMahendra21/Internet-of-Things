<!-- cek apakah sudah login -->
<?php
session_start();
if ($_SESSION['status'] != "login") {
    header("location: login.php?pesan=belum_login");
}
?>

<!doctype html>
<html lang="id">

<head>
    <?php include('desain.php'); ?>
</head>

<body class="bg-light">
    <?php include('navbar.php'); ?>

    <div class="container">
        <div class="card border-0 shadow-sm rounded-0 border-0">
            <div class="card-header bg-white rounded-0 border-0">
                <h3 class="text-center">Data Langsung "Masuk Dan Keluar"</h3>
            </div>
            <div class="card-body bg-white rounded-0 border-0">
                <div class="p-md-3" id="dataTabel"></div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            setInterval(function() {
                $("#dataTabel").load('dataTabel.php')
            }, 200);
        });
    </script>

</body>

</html>