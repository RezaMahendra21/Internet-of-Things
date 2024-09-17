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
    <?php
    include('koneksi.php');
    mysqli_query($koneksi, "DELETE FROM anggotatag");
    ?>
</head>

<body class="bg-light">
    <?php include('navbar.php'); ?>

    <div class="container col-md-4">
        <div class="card border-0 shadow-sm rounded-0">
            <div class="card-header bg-white border-0 rounded-0">
                <h3 class="text-center">Tambah Anggota</h3>
            </div>
            <div class="card-body bg-white">

                <!-- start form tambah anggota -->
                <form class="" action="anggotaTambahProses.php" method="POST">
                    <div class="form-group">
                        <div id="tag"></div>
                    </div>
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" class="form-control rounded-0 border-0 bg-light" name="nama_anggota" placeholder="Isi Nama Lengkap...">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control rounded-0 border-0 bg-light" name="email_anggota" placeholder="Isi Email...">
                    </div>
                    <div class="form-group">
                        <label>No HP</label>
                        <input type="number" class="form-control rounded-0 border-0 bg-light" name="whatsapp_anggota" placeholder="Isi No HP...">
                    </div>
                     <div class="form-group">
                        <label>No Plat</label>
                        <input type="text" class="form-control rounded-0 border-0 bg-light" name="no_plat" placeholder="Isi No Plat...">
                    </div>
                    <button type="submit" class="btn btn-success rounded-0 border-0"><i class="fa fa-sign-in" aria-hidden="true"></i> Tambah</button>
                </form>
                <!-- end form tambah anggota -->

            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            setInterval(function() {
                $("#tag").load('anggotaTag.php')
            }, 200);
        });
    </script>

</body>

</html>