<?=$this->extend('/template/index')?>

<?=$this->section('content')?>

<div class="jumbotron jumbotron-fluid mt-n5 text-light bg-primary">
  <div class="container">
    <h1 class="display-6">Selamat Datang <?=user()->username;?></h1>
    <p class="lead">Semoga aktivitas belajarmu menyenangkan.</p>
    <div class="row">

<!-- Earnings (Monthly) Card Example -->
<div class="col">
    <div class="card border-left-danger border-dark shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                        Ulangan Yang tersedia</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">Bahasa Indonesia</div>
                </div>
                <div class="col-auto">
                <a class="btn btn-primary btn-lg" href="#" role="button">Kerjakan</a>
                </div>
            </div>
        </div>
    </div>
</div>


</div>
  </div>
  
</div>

<div class="container">
<div class="card border-dark">
  <div class="card-header border-dark text-dark">
        Profil 
  </div>
  <div class="card-body">
    <div class="row">
        <div class="col-md-4 text-center mt-md-4">
            <img src="<?=base_url()?>/img/logo-veteran.png" width="109px" alt="" srcset="">
        </div>
        <div class="col-md-8">
        <table class="table">
  <tr>

  </tr>
  <tr>
    <td>nisn</td>
    <td>Maria Anders</td>
   
  </tr>
  <tr>
    <td>Nama</td>
    <td>Francisco Chang</td>
  
  </tr>
  <tr>
    <td>ttl</td>
    <td>Roland Mendel</td>

  </tr>

</table>

          
            
        </div>
    </div>
  </div>
</div>
</div>
      
<?=$this->endSection()?>