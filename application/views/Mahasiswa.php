<!doctype html>
<html lang="en">
    
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>/css/bootstrap.min.css">
<style type="text/css">
    body{
        background-image: url("assets/img/x.jpg");
        background-size: cover;
        background-repeat: no-repeat;
        }
</style>
    <title>Dashboard</title>
</head>

<body>
    <!-- As a heading -->
    <nav class="navbar navbar-dark bg-dark">
        <center><div class="container">
            <span class="navbar-brand mb-0 h1">Elvan Admin</span>
        </div></center>
    </nav>

    <div class="container">
        <div class="row mt-6">
            <div class="col-md-12">
                <p><center><h3><b><font color="white">DATA LENGKAP MAHASISWA</font></b></h3></center></p>
                 <a href="<?= base_url('Mahasiswa/tambah_data/'); ?>" class="btn btn-success mb-2"> Add Data</a>
                  <a href="<?= base_url('login/logout'); ?>" class="btn btn-dark mb-2">Close</a>

                <div class="table-responsive table-striped">
                    <table class="table table-striped table-dark text-center">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Name</th>
                                <th scope="col">NIM</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Class</th>
                                <th scope="col">Email</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no=1;
                            foreach ($mhs as $m) : ?>
                                <tr>
                                    <th scope="row">
                                    <?= $no++; ?></th>
                                    <td><?= $m['nama']; ?></td>
                                    <td><?= $m['nim']; ?></td>
                                    <td><?= $m['jk']; ?></td>
                                    <td><?= $m['kelas']; ?></td>
                                    <td><?= $m['email']; ?></td>
                                    <td>
                                    <a href="<?= base_url('mahasiswa/edit_data/'); ?><?= $m['id_mhs']; ?>" 
                                    class="badge badge-warning pl-2 pr-2"
                                     onclick="return confirm('Apakah kamu ingin mengedit data ini?');">Edit</a>
                                    <a href="<?= base_url('mahasiswa/hapus/'); ?><?= $m['id_mhs']; ?>" 
                                    class="badge badge-danger pl-2 pr-2"
                                     onclick="return confirm('Apakah kamu ingin menghapus data ini?');">Delete</a></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <script src="<?= base_url('assets') ?>/js/bootstrap.min.js"></script>
</body>

</html>