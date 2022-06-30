<?= $this->extend('/template/index'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-sm-6 offset-sm-3">

            <div class="card">
                <h2 class="card-header"><?=lang('Auth.register')?> siswa</h2>
                <div class="card-body">

                    <?= view('Myth\Auth\Views\_message_block') ?>

                    <form action="<?= route_to('register') ?>" method="post"  enctype="multipart/form-data">
                        <?= csrf_field() ?>

                        

                        <div class="form-group">
                            <label for="username"><?=lang('Auth.username')?></label>
                            <input type="text" class="form-control <?php if(session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?=lang('Auth.username')?>" value="<?= old('username') ?>">
                        </div>

                          <div class="col-sm-5 mb-3">
                          <label for="nisn">Nama</label>
                          <input class="form-control" name="nama" type="input" id="nama" placeholder="Nama" value="<?= old('nama'); ?>">
                          <div class=" invalid-feedback">
                      
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

                        <div class="form-group">
                            <label for="password"><?=lang('Auth.password')?></label>
                            <input type="password" name="password" class="form-control <?php if(session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.password')?>" autocomplete="off">
                        </div>

                        <div class="form-group">
                            <label for="pass_confirm"><?=lang('Auth.repeatPassword')?></label>
                            <input type="password" name="pass_confirm" class="form-control <?php if(session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.repeatPassword')?>" autocomplete="off">
                        </div>
                        

                        <br>

                        <button type="submit" class="btn btn-primary btn-block"><?=lang('Auth.register')?></button>
                    </form>


                    <hr>

                    <p><?=lang('Auth.alreadyRegistered')?> <a href="<?= route_to('login') ?>"><?=lang('Auth.signIn')?></a></p>
                </div>
            </div>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>