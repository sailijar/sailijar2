<?php
#1. koneksikan file ini
include("../koneksi.php");

#2. mengambil value dari form
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$tempat = $_POST['tempat'];
$tanggal = $_POST['tanggal'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$jk = $_POST['jk'];
$jur = $_POST['jur'];
$dos = $_POST['dos'];

#3. menulis query
$simpan = "INSERT INTO mahasiswas (nim,nama,tmp_lahir,tgl_lahir,alamat,email,jk,jurusans_id,dosens_id) 
VALUES ('$nim','$nama','$tempat','$tanggal','$alamat','$email','$jk','$jur','$dos')";

#4. jalankan query
$proses = mysqli_query($koneksi, $simpan);



#5. mengalihkan halaman
// header("location:index.php");
?>
<script>
    document.location="index.php";
</script>