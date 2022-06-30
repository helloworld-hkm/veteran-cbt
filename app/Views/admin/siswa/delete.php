<?= $this->extend('/template/index'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <form action="/siswa/delete" method="post" class="user">
        <div>
            <div class="col-sm-5 mt-5">
                <label for="nisn">NISN</label>
                <input class="form-control" name="nisn" type="input" id="nisn" placeholder="NISN">
            </div>
            <div class="col-sm-5">
                <label for="nisn">Nama</label>
                <input class="form-control" name="nama" type="input" id="nama" placeholder="Nama">
            </div>
            <div class="col-sm-5">
                <label for="nisn">Alamat</label>
                <input class="form-control" name="alamat" type="input" id="alamat" placeholder="Alamat">
            </div>
            <div class="col-sm-5">
                <label for="nisn">Kd_kelas</label>
                <input class="form-control" name="kd_kelas" type="input" id="kd_kelas" placeholder="Kode Mapel">
            </div>
            <div class="col-sm-5">
                <label for="tgl_lahir">Tanggal Lahir</label>
                <input class="form-control" name="tgl_lahir" type="date" id="tgl_lahir" placeholder="Tanggal Lahir">
            </div>
            <div class="col-sm-5">
                <label for="nisn">Foto</label>
                <input class="form-control" name="foto" type="file" id="foto" placeholder="Masukan Foto">
            </div>
            <div><button class="btn btn-primary">Kirim</button></div>
        </div>
    </form>

</div>
<?= $this->endSection(); ?>