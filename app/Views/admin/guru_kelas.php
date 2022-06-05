<?=$this->extend('admin/template/index')?>

<?=$this->section('content')?>

    <center><h1>Daftar Relasi Guru-Kelas</h1></center>
    <a href="/guru_kelas/tambah" class="btn btn-primary mb-4">Tambah Guru-Kelas</a>

    <table class="table table-success table-striped">
    <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">NISN</th>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">Tanggal Lahir</th>
      <th scope="col">Jenis Kelamain</th>
      <th scope="col">Kode Kelas</th>
      <th scope="col">Foto</th>
    </tr>
  </thead>
</table>
<?=$this->endSection()?>