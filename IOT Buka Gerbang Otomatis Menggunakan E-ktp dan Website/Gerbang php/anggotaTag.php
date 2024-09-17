<?php
include('koneksi.php');
$tag = mysqli_query($koneksi, "SELECT * FROM anggotatag ORDER BY no DESC LIMIT 1");
$row = mysqli_fetch_array($tag);
?>
<label>Tag Anggota</label>
<input type="text" class="form-control rounded-0 border-0 bg-light" name="tag_anggota" value="<?php echo $row['tag']; ?>" readonly>
<small class="form-text text-muted">Silakan Tap Kartu RFID Anda, untuk Input Tag Otomatis.</small>