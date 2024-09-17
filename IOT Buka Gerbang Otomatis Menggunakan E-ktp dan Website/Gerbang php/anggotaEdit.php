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

    $no = $_GET['no'];
    $anggota   = mysqli_query($koneksi, "SELECT * FROM anggota WHERE no ='$no'");
    $row = mysqli_fetch_array($anggota);
    $nama = $row['nama_anggota'];
    $email = $row['email_anggota'];
    $whatsapp = $row['whatsapp_anggota'];
    ?>
</head>

<body class="bg-light">
    <?php include('navbar.php'); ?>

    <div class="container col-md-4">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-white rounded-0 border-0">
                <h3 class="text-center">Edit Anggota</h3>
            </div>
            <div class="card-body bg-white">

                <!-- start form tambah anggota -->
                <form class="" action="anggotaEditProses.php" method="POST">
                    <div class="form-group">
                        <div id="tag"></div>
                    </div>
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="number" name="no" value="<?php echo $row['no']; ?>" hidden>
                        <input type="text" class="form-control rounded-0 border-0 bg-light" name="nama_anggota" value="<?php echo $nama; ?>" placeholder="Isi Nama Lengkap...">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control rounded-0 border-0 bg-light" name="email_anggota" value="<?php echo $email; ?>" placeholder="Isi Email...">
                    </div>
                    <div class="form-group">
                        <label>No Hp</label>
                        <input type="number" class="form-control rounded-0 border-0 bg-light" name="whatsapp_anggota" value="<?php echo $whatsapp; ?>" placeholder="Isi No Hp...">
                    </div>
                    <button type="submit" class="btn btn-success rounded-0 border-0"><i class="fa fa-sign-in" aria-hidden="true"></i> Simpan</button>
                </form>
                <!-- end form tambah anggota -->

            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            setInterval(function() {
                $("#tag").load('anggotaTagEdit.php?no=<?php echo $no; ?>')
            }, 200);
        });
    </script>

</body>

</html>