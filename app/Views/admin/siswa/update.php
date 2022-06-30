<?= $this->extend('/template/index'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <h2 class="my-3"> Form Update Data Siswa</h2>
    <form action="/admin/updatedataSiswa/<?= $ss['id']; ?>" method="post" class="user" enctype="multipart/form-data">
        <input type="hidden" name="fotoLama" value="<?= $ss['foto']; ?>">
        <div>
            <div class="col-sm-5 mt-5 mb-3">
                <label for="nisn">NISN</label>
                <input class="form-control" name="nisn" type="input" id="nisn" placeholder="NISN" value="<?= $ss['nisn']; ?>">
            </div>
            <div class="col-sm-5 mb-3">
                <label for="nisn">Nama</label>
                <input class="form-control" name="nama" type="input" id="nama" placeholder="Nama" value="<?= $ss['nama']; ?>">
            </div>
            <div class=" col-sm-5 mb-3">
                <label for="nisn">Alamat</label>
                <input class="form-control" name="alamat" type="input" id="alamat" placeholder="Alamat" value="<?= $ss['alamat']; ?>">
            </div>
            <div class=" col-sm-5 mb-3">
                <label for="nisn">kd_kelas</label>
                <input class="form-control" name="kd_kelas" type="input" id="kd_kelas" placeholder="Kode Mapel" value="<?= $ss['kd_kelas']; ?>">
            </div>
            <div class=" col-sm-5 mb-3">
                <label for="tgl_lahir">Tanggal Lahir</label>
                <input class="form-control" name="tgl_lahir" type="date" id="tgl_lahir" placeholder="Tanggal Lahir" value="<?= $ss['tgl_lahir']; ?>">
            </div>
            <div class=" col-sm-5 mb-3">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="foto" id="foto" onChange="labelFoto()">
                    <label class="custom-file-label" for="foto"><?= $ss['foto']; ?></label>
                </div>
            </div>
            <div><button class=" btn btn-primary">Ubah</button>
            </div>
        </div>
    </form>

</div>
<?= $this->endSection(); ?>