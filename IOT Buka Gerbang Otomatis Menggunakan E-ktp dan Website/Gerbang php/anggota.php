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
        <div class="card border-0 shadow-sm rounded-0">
            <div class="card-header bg-white border-0 rounded-0">
                <h3 class="text-center mr-3">Data Anggota</h3>
            </div>
            <div class="card-body bg-white rounded-0 border-0">
                <div class="p-md-3">
                    <a href="anggotaTambah.php" type="button" class="btn btn-warning rounded-0 border-0"><i class="fa fa-sign-in"></i> Tambah Anggota</a>
                    <br><br>
                    <!-- start tabel data anggota -->
                    <table class="table table-responsive-sm table-bordered table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Tag</th>
                                <th scope="col">Nama Lengkap</th>
                                <th scope="col">Email</th>
                                <th scope="col">No HP</th>
                                <th scope="col">No Plat</th>
                                <th scope="col">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include('koneksi.php');
                            $no = 0;
                            $anggota   = mysqli_query($koneksi, "SELECT * FROM anggota");
                            while ($row = mysqli_fetch_array($anggota)) {
                                $no++;
                            ?>
                                <tr>
                                    <th scope="row"><?php echo $no; ?></th>
                                    <td><?php echo $row['tag_anggota']; ?></td>
                                    <td><?php echo $row['nama_anggota']; ?></td>
                                    <td><?php echo $row['email_anggota']; ?></td>
                                    <td><?php echo $row['whatsapp_anggota']; ?></td>
                                    <td><?php echo $row['no_plat']; ?></td>
                                    <td>
                                        <a href="anggotaEdit.php?no=<?php echo $row['no']; ?>" class="btn btn-success btn-sm rounded-0 border-0"><i class="fa fa-edit"></i> Edit </a>
                                        <a href="anggotaHapus.php?no=<?php echo $row['no']; ?>" class="btn btn-danger btn-sm rounded-0 border-0"><i class="fa fa-remove"></i> Hapus </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>

                    </table>
                    <!-- end tabel data anggota -->
                </div>

            </div>
        </div>
    </div>

</body>

</html>