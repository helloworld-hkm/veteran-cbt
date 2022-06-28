<?=$this->extend('template/index')?>

<?=$this->section('content')?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-2">Daftar Siswa</h1>
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
            <a href="/admin/createSiswa" class="btn btn-primary btn-user mt-3 ml-3 mb-4">Tambah Data</a>
            <form action="" method="post">
            </form>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <!-- <th scope="col">id</th> -->
                                    <th scope="col">NISN</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">kd_kelas</th>
                                    <th scope="col">Tgl_Lahir</th>
                                    <th scope="col">Foto</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th scope="col">No</th>
                                    <!-- <th scope="col">id</th> -->
                                    <th scope="col">NISN</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Kd_kelas</th>
                                    <th scope="col">Tgl_Lahir</th>
                                    <th scope="col">Foto</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php $i = 1;  ?>
                                <?php foreach ($siswa as $ss) : ?>
                                    <tr>
                                        <th scope="row"><?= $i++; ?></th>

                                        <td><?= $ss['nisn']; ?></td>
                                        <td><?= $ss['nama']; ?></td>
                                        <td><?= $ss['alamat']; ?></td>
                                        <td><?= $ss['kd_kelas']; ?></td>
                                        <td><?= $ss['tgl_lahir']; ?></td>
                                        <td><img src="/img/<?= $ss['foto']; ?>" alt="" class="foto"></td>
                                        <td><a href="<?= base_url('admin/siswa/' . $ss['id']); ?>" class="btn btn-outline-success">Detail</a>
                                        </td>

                                    </tr>
                                <?php endforeach; ?>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
    
<?=$this->endSection()?>