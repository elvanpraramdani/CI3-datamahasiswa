<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/bootstrap.min.css">

    <title>edit data</title>
</head>

<body>
    <!-- As a heading -->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <span class="navbar-brand mb-0 h1">ElvanAdmin</span>
        </div>
    </nav>

    <div class="container">
        <div class="row mt-4">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header">
                        <center><b>Edit Data Mahasiswa</b></center>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <input type="hidden" value="<?= $mhs['id_mhs']; ?>" name="id_mhs">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" value="<?= $mhs['nama']; ?>">
                                <?= form_error('nama', '<small class="pl-3 text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="nim">NIM</label>
                                <input type="number" class="form-control" id="nim" name="nim" value="<?= $mhs['nim']; ?>">
                                <?= form_error('jk', '<small class="pl-3 text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="jk">Jenis Kelamin</label>
                                <input type="text" class="form-control" id="jk" name="jk" value="<?= $mhs['jk']; ?>">
                                <?= form_error('jk', '<small class="pl-3 text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="id_kelas">Kelas</label>
                                <input type="id_kelas" class="form-control" id="id_kelas" name="id_kelas" value="<?= $mhs['id_kelas']; ?>">
                                <?= form_error('id_kelas', '<small class="pl-3 text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" name="email" value="<?= $mhs['email']; ?>">
                                <?= form_error('email', '<small class="pl-3 text-danger">', '</small>'); ?>
                            </div>
                            <button type="submit" class="btn btn-warning float-right" name="Ubah">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <script src="<?= base_url('assets') ?>/js/bootstrap.min.js"></script>
</body>

</html>