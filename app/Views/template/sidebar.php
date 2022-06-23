<?php if (in_groups('admin')) {
   $groups='admin';
   
    }
    else if (in_groups('siswa')) {
        $groups='siswa';
    } else if (in_groups('guru')) {
        $groups='guru';
    } 

?>

<ul class="navbar-nav <?=in_groups('admin')?"bg-gradient-primary sidebar-dark":"bg-secondary sidebar-dark "?> sidebar  accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
                <div class="sidebar-brand-icon r">
                   <img src="<?= base_url() ?>/img/logo-veteran.png" width="50%" alt="">
                </div>
                <div class="sidebar-brand-text mx-3">Veteran CBT</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.html">
                <i class="fas fa-fw fa-home"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <?php if (in_groups('admin')):?>
            <div class="sidebar-heading">
                Manajement
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Data Master</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Master :</h6>
                        <a class="collapse-item" href="/admin/guru">Guru</a>
                        <a class="collapse-item" href="/admin/siswa">Siswa</a>
                        <a class="collapse-item" href="/admin/mapel">Mata Pelajaran</a>
                        <a class="collapse-item" href="/admin/kelas">Kelas</a>
                        <a class="collapse-item" href="/admin/jurusan">Jurusan</a>
                    </div>
                </div>
            </li>
 
            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Relasi</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Relasi:</h6>
                        <a class="collapse-item" href="/<?=$groups?>/guru_kelas">Guru - Kelas</a>
                        <a class="collapse-item" href="/admin/mata_pelajaran">Mata Pelajaran - Jurusan</a>

                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseulangan" aria-expanded="true" aria-controls="collapseulangan">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Ulangan</span>
                </a>
                <div id="collapseulangan" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">data Ulangan :</h6>
                        <a class="collapse-item" href="buttons.html">Bank Soal</a>
                        <a class="collapse-item" href="cards.html">Soal Ulangan</a>


                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Laporan
            </div>

            <!-- Nav Item - Pages Collapse Menu -->


            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Hasil Ulangan</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Pembayaran SPP</span></a>
            </li>
            <div class="sidebar-heading">
                Administrator
            </div>

            <!-- Nav Item - Pages Collapse Menu -->


            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Kelola Akun</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Setting</span></a>
            </li>
            <?php endif; ?>
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-clipboard"></i>
                    <span>Ulangan</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>