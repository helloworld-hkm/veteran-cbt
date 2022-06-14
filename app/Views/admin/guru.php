<?=$this->extend('admin/template/index')?>

<?=$this->section('content')?>

    <center><h1>Daftar Guru SMK VETERAN</h1></center>
    <a href="/guru/tambah" class="btn btn-primary mb-4">Tambah Guru</a>

    <table class="table table-success table-striped">
    <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nik</th>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">Kd_Mapel</th>
      <th scope="col">Tgl_Lahir</th>
      <th scope="col">Foto</th>
    </tr>
  </thead>
</table>

<?=$this->endSection()?>