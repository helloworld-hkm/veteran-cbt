<?=$this->extend('auth/template/index')?>

<?=$this->section('content')?>
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">
           
            <div class="col-xl-6 col-lg-6 col-md-8 mb-n4 mt-5">
                

                <div class="card o-hidden border-0 bg-blur shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <!-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> -->
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                       
                                        <h2 class="h5 text-dark mb-n2"> Aplikasi Ulangan Daring </h2>
                                        
                                        <h1 class="h1 text-primary  mb-n1 smk"> SMK VETERAN </h1>
                                        <h2 class="h6 text-gray-900 mb-1">Jl. Maninjau No.14 51129 Pekalongan Jawa Tengah </h2>
                                    </div>
                                    <form class="user">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="InputUsername" aria-describedby="emailHelp"
                                                placeholder="NISN">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Kata Sandi">
                                        </div>
                                        <div class="form-group">
                                            <!-- <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div> -->
                                        </div>
                                        <a href="index.html" class="btn btn-primary btn-user btn-block">
                                            Masuk
                                        </a>
                                        
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <p class="small mb-n4">created by blablabla team </p>
                                      
                                        
                                    </div>
                                    
                                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
<?=$this->endSection();?>