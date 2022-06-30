<?= $this->extend('/template/index'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-4">Detail Siswa</h1>
            <div class="card mb-4" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4  text-center ">
                        <img src="/img/<?= $siswa->foto; ?>" class="img-fluid text-center rounded-circle  " width="" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body ">
                            <h5 class="card-title"><?= $siswa->nama; ?></h5>
                            <p class="card-text"> NISN : <?= $siswa->nisn; ?></p>
                            <p class="card-text"> Alamat : <?= $siswa->alamat; ?></p>
                            <p class="card-text"> Kd_kelas :<?= $siswa->kd_kelas; ?></p>
                            <p class="card-text"> Tgl_Lahir :<?= $siswa->tgl_lahir; ?></p>

                            <a href="/admin/updateSiswa/<?= $siswa->id; ?>" class="btn btn-outline-success">Edit</a>

                            <form action="/admin/deleteSiswa/<?= $siswa->id; ?>" method="post" class="d-inline">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="Delete">
                                <button type="submit" class="btn btn-outline-success" onclick="return confirm('Yakin data akan dihapus?');">Delete</button>
                            </form>

                            <a href="/admin/siswa" class="btn btn-outline-success"> back</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>