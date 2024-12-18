<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/all.css">
</head>
<body>
<?php 
    include_once('../navbar.php');
?>

<div class="container">
    <div class="row mt-5">
        <div class="col-12 m-auto">
            <div class="card">
            <div class="card-header">
                <h3 class="float-start">Data Mahasiswa</h3>
                <span class="float-end"><a class="btn btn-primary" href="form.php"><i class="fa-solid fa-square-plus"></i> Tambah Data</a></span>
            </div>
            <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">NIM</th>
                        <th scope="col">Nama Mahasiswa</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Dosen Wali</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    #1. koneksikan file ini
                    include("../koneksi.php");

                    #2. menulis query
                    $tampil = "SELECT *, mahasiswas.nama as nm_mhs, dosens.nama as nm_dos FROM mahasiswas 
                    INNER JOIN jurusans ON mahasiswas.jurusans_id=jurusans.id
                    INNER JOIN dosens ON mahasiswas.dosens_id=dosens.id";

                    #3. jalankan query
                    $proses = mysqli_query($koneksi, $tampil);

                    #4. looping data dari database
                    $nomor = 1;
                    foreach($proses as $data){
                    ?>
                    <tr>
                        <th scope="row"><?=$nomor++?></th>
                        <td><?=$data['nim']?></td>
                        <td><?=$data['nm_mhs']?></td>
                        <td><?=$data['jk']?></td>
                        <td><?=$data['jurusan']?></td>
                        <td><?=$data['nm_dos']?></td>
                        <td>
                            <a class="btn btn-info btn-sm" href="edit.php?id=<?=$data['id']?>"><i class="fa fa-pen-to-square"></i></a>
                            
                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapus<?=$data['id']?>">
                            <i class="fa-solid fa-trash"></i>
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="hapus<?=$data['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Peringatan</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Yakin data <b><?=$data['nama ']?></b> ingin dihapus?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                    <a href="hapus.php?xyz=<?=$data['id']?>" class="btn btn-danger">Hapus</a>
                                </div>
                                </div>
                            </div>
                            </div>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            </div>
            </div>
        </div>
    </div>
</div>

    <script src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../js/all.js"></script>
</body>
</html>