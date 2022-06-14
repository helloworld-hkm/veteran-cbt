<?= $this->extend('auth/template/index') ?>

<?= $this->section('content') ?>
<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-6 col-lg-6 col-md-8 mb-n4">


            <div class="card o-hidden border-0 bg-blur shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <!-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> -->
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">

                                    <img src="<?= base_url()?>/img/logo-veteran.jpg" class="img-fluid" alt="logoi" width="15%">
                                    <h2 class="h5 text-dark mt-2 mb-n1"> SMK VETERAN PEKALONGAN </h2>
                                    <h2 class="h6 text-gray-900 mb-3">Jl. Maninjau No.14 51129 Pekalongan Jawa Tengah </h2>


                                    <h1 class="h2 text-primary  f-1 mb-4"> <b>Halaman Masuk Guru</b></h1>
                                    <?= view('Myth\Auth\Views\_message_block') ?>


                                </div>
                                <form class="user" action="<?= route_to('login-admin') ?>" method="POST">
                                    <div class="form-group">
                                        <input type="text" name="login" class="form-control form-control-user <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" id="InputUsername" aria-describedby="emailHelp" placeholder="NIK">
                                        <div class="invalid-feedback">
                                            <?= session('errors.login') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control form-control-user   <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" "
                                                id=" exampleInputPassword" placeholder="Password" autocomplete="off">
                                        <div class="invalid-feedback">
                                            <?= session('errors.password') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <!-- <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div> -->
                                    </div>
                                    <input type="submit" class="btn btn-primary btn-user btn-block" value="Masuk">

                                </form>
                                <hr>
                                <div class="text-center">
                                    <p class="h6 mb-n4">Dibuat oleh lina &middot; hakim &middot; septiyan &copy; <?=(date("Y"));?></p>


                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
<?= $this->endSection(); ?>