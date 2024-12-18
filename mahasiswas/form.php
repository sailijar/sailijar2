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
        <div class="col-8 m-auto">
            <div class="card">
            <div class="card-header">
                <h3 class="float-start">Form Data Mahasiswa</h3>
                
            </div>
            <div class="card-body">
            <form action="proses.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">NIM</label>
                    <input type="text" name="nim" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Nama Mahasiswa</label>
                    <input type="text" name="nama" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Tempat lahir</label>
                    <input type="text" name="tempat" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Tanggal Lahir</label>
                    <input type="date" name="tanggal" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Jenis Kelamin</label>
                    <br>
                    <input type="radio" name="jk" value="L" class="" id="exampleInputPassword1"> Laki Laki
                    <input type="radio" name="jk" value="P" class="" id="exampleInputPassword1"> Perempuan
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Jurusan</label>
                    <select name="jur" class="form-control" id="">
                        <option value="">-Pilih Jurusan-</option>
                        <?php
                            include('../koneksi.php');
                            $sql_jur = "SELECT * FROM jurusans";
                            $qry_jur = mysqli_query($koneksi,$sql_jur);
                            foreach($qry_jur as $data_jur){
                                ?>
                                <option value="<?=$data_jur['id']?>"><?=$data_jur['jurusan']?></option>
                                <?php
                            }
                        ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Dosen Wali</label>
                    <select name="dos" class="form-control" id="">
                        <option value="">-Pilih Dosen Wali-</option>
                        <?php
                            include('../koneksi.php');
                            $sql_dos = "SELECT * FROM dosens WHERE jabatan='Full Time'";
                            $qry_dos = mysqli_query($koneksi,$sql_dos);
                            foreach($qry_dos as $data_dos){
                                ?>
                                <option value="<?=$data_dos['id']?>"><?=$data_dos['nama']?></option>
                                <?php
                            }
                        ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Foto</label>
                    <input type="file" accept="image/*" name="foto" class="form-control" id="exampleInputPassword1">
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
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