<?php
include('koneksi.php');
$no = $_GET['no'];
$anggota   = mysqli_query($koneksi, "SELECT * FROM anggota WHERE no ='$no'");
$row = mysqli_fetch_array($anggota);

$tag = mysqli_query($koneksi, "SELECT * FROM anggotatag ORDER BY no DESC LIMIT 1");
$row2 = mysqli_fetch_array($tag);
$num2 = mysqli_num_rows($tag);

if ($num2 == "") {
?>
    <label>Tag Anggota</label>
    <input type="text" class="form-control rounded-0 border-0 bg-light" name="tag_anggota" value="<?php echo $row['tag_anggota']; ?>" readonly>
    <small class="form-text text-muted">Silakan Tap Kartu RFID Anda, untuk Input Tag Otomatis.</small>

<?php
}
if ($num2 != "") {
?>
    <label>Tag Anggota</label>
    <input type="text" class="form-control rounded-0 border-0 bg-ligh" name="tag_anggota" value="<?php echo $row2['tag']; ?>" readonly>
    <small class="form-text text-muted">Silakan Tap Kartu RFID Anda, untuk Input Tag Otomatis.</small>
<?php } ?>