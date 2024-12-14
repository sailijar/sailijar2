<?php
#1. koneksikan file ini
include("../koneksi.php");

#2. mengambil value dari form
$nidn = $_POST['nidn'];
$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];

#3. menulis query
$simpan = "INSERT INTO dosens (nidn,nama,jabatan,email,no_hp) VALUES ('$nidn','$nama',
'$jabatan','$email','$no_hp')";

#4. jalankan query
$proses = mysqli_query($koneksi, $simpan);

#5. mengalihkan halaman
// header("location:index.php");
?>
<script>
    document.location="index.php";
</script>