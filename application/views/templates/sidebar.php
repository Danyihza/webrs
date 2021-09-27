<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion <?php 
    $url = $this->uri->segment(1);
    if(strpos($url, 'laporan') !== false) {
        echo 'toggled';
    } ?>" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('dashboard'); ?>">
        <div class="sidebar-brand-icon">
            <i class="fas fa-fw fa-user-circle"></i>
        </div>
        <div class="sidebar-brand-text mx-2"><?= $this->session->userdata('username'); ?></div>
    </a>
    <?php
    $level = $this->session->userdata('level');
    if ($level == "1") { ?>
        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('pengguna'); ?>">
                <i class="fas fa-fw fa-user"></i>
                <span>Data Pengguna</span></a>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('peminjaman'); ?>">
                <i class="fas fa-fw fa-folder-plus"></i>
                <span>Data Peminjaman</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('pengembalian'); ?>">
                <i class="fas fa-fw fa-folder-plus"></i>
                <span>Data Pengembalian</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a href="" class="nav-link collapsed"  data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                <i class="far fa-fw fa-clone"></i>
                <span>Laporan</span>

            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="<?= base_url('laporanpeminjaman'); ?>">Laporan Peminjaman</a>
                    <hr class="sidebar-divider">
                    <a class="collapse-item" href="<?= base_url('laporanpengembalian'); ?>">Laporan Pengembalian</a>
                    <hr class="sidebar-divider">
                    <a class="collapse-item" href="<?= base_url('laporanketerlambatan'); ?>">Laporan Keterlambatan</a>
                    <hr class="sidebar-divider">
                    <a class="collapse-item" href="<?= base_url('laporanpengguna'); ?>" >Laporan Pengguna</a>
                    <hr class="sidebar-divider">
                </div>
            </div>
            <hr class="sidebar-divider my-0">
        </li>

        <!-- Nav Item - Charts -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('grafik'); ?>">
                <i class="fas fa-fw fa-chart-bar"></i>
                <span>Grafik</span></a>
        </li>

        <hr class="sidebar-divider my-0">
    <?php } else if ($level == "2") { ?>
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('peminjaman'); ?>">
                <i class="fas fa-fw fa-folder-plus"></i>
                <span>Data Peminjaman</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('pengembalian'); ?>">
                <i class="fas fa-fw fa-folder"></i>
                <span>Data Pengembalian</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Charts -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('grafik'); ?>">
                <i class="fas fa-fw fa-chart-bar"></i>
                <span>Grafik</span></a>
        </li>

        <hr class="sidebar-divider my-0">

    <?php } else if ($level == "3") { ?>
        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url('laporan'); ?>" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                <i class="far fa-fw fa-clone"></i>
                <span>Laporan</span>

            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="<?= base_url('laporanpeminjaman'); ?>">Laporan Peminjaman</a>
                    <hr class="sidebar-divider">
                    <a class="collapse-item" href="<?= base_url('laporanpengembalian'); ?>">Laporan Pengembalian</a>
                    <hr class="sidebar-divider">
                    <a class="collapse-item" href="<?= base_url('laporanketerlambatan'); ?>">Laporan Keterlambatan</a>
                    <hr class="sidebar-divider">
                </div>
            </div>

        </li>

        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Charts -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('grafik'); ?>">
                <i class="fas fa-fw fa-chart-bar"></i>
                <span>Grafik</span></a>
        </li>

        <hr class="sidebar-divider my-0">
    <?php } ?>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('auth/logout'); ?>" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Logout</span></a>

    </li>

    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->