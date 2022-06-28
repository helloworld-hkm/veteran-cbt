<?= $this->extend('/template/index'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <h2 class="my-3"> Form Tambah Data Siswa</h2>
    <form action="/admin/simpanSiswa" method="post" class="user" enctype="multipart/form-data">
        <div>
            <div class="col-sm-5 mt-5 mb-3">
                <label for="nisn">NISN</label>
                <input class="form-control <?= ($validation->hasError('nisn')) ? 'is-invalid' : ''; ?>" name="nisn" type="input" id="nisn" placeholder="NISN" autocomplete="off" autofocus value="<?= old('nisn'); ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('nisn'); ?>
                </div>
            </div>
            <div class="col-sm-5 mb-3">
                <label for="nisn">Nama</label>
                <input class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" name="nama" type="input" id="nama" placeholder="Nama" value="<?= old('nama'); ?>">
                <div class=" invalid-feedback">
                    <?= $validation->getError('nama'); ?>
                </div>
            </div>
            <div class="col-sm-5 mb-3">
                <label for="alamat">Alamat</label>
                <input class="form-control" name="alamat" type="input" id="alamat" placeholder="Alamat" value="<?= old('alamat'); ?>">
            </div>
            <div class=" col-sm-5 mb-3">
                <label for="kd_kelas">Kd_kelas</label>
                <input class="form-control" name="kd_kelas" type="input" id="kd_kelas" placeholder="Kode Mapel" value="<?= old('kd_kelas'); ?>">
            </div>
            <div class=" col-sm-5 mb-3">
                <label for="tgl_lahir">Tanggal Lahir</label>
                <input class="form-control" name="tgl_lahir" type="date" id="tgl_lahir" placeholder="Tanggal Lahir" value="<?= old('tgl_lahir'); ?>">
            </div>
            <div class=" col-sm-5 mb-3">
                <label for="foto">Foto</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="foto" id="foto" onChange="labelFoto()">
                    <label class="custom-file-label" for="foto">Pilih File</label>
                </div>
            </div>

            <div><button class=" btn btn-primary ">Kirim</button></div>
        </div>
    </form>

</div>
<?= $this->endSection(); ?>