<!-- start tabel data anggota -->
<table class="table table-responsive-sm table-bordered table-striped">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">ID EKTP</th>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Waktu Masuk</th>
            <th scope="col">Waktu Keluar</th>
            <th scope="col">Opsi</th>
        </tr>
    </thead>

    <tbody>
        <?php
        include('koneksi.php');
        $nomor = 0;
        $data   = mysqli_query($koneksi, "SELECT * FROM data ORDER BY no DESC");
        while ($row = mysqli_fetch_array($data)) {
            $no = $row['no'];
            $no = $no + 1;
            $data2  = mysqli_query($koneksi, "SELECT * FROM data WHERE no='$no'");
            $row2   = mysqli_fetch_array($data2);
            $nomor++;
        ?>
            <tr>
                <td><?php echo $nomor; ?></td>
                <td><?php echo $row['tag_anggota']; ?></td>
                <td><?php echo $row['nama_anggota']; ?></td>
                <td><?php echo $row['tanggal']; ?></td>
                <td><?php echo $row['waktumasuk']; ?></td>
                <td><?php echo $row['waktukeluar']; ?></td>
                <td>
                    <!-- <a href="anggotaEdit.php?no=<?php echo $row['no']; ?>" class="btn btn-success btn-sm rounded-0 border-0"> Edit </a> -->
                    <a href="dataHapus.php?no=<?php echo $row['no']; ?>" class="btn btn-danger btn-sm rounded-0 border-0"><i class="fa fa-remove"></i> Hapus </a>
                </td>
            </tr>
        <?php } ?>

    </tbody>

</table>
<!-- end tabel data anggota -->