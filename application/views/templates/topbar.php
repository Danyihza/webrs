<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Search
            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form> -->

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

                <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                <li class="nav-item dropdown no-arrow d-sm-none">
                    <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-search fa-fw"></i>
                    </a>
                    <!-- Dropdown - Messages -->
                    <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                        <form class="form-inline mr-auto w-100 navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
                <!-- Nav Item - Alerts -->
                <?php if ($this->session->userdata('level') == 1) { ?>
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-bell fa-fw"></i>
                            <!-- Counter - Alerts -->
                            <span class="badge badge-danger badge-counter"><?= $notiftoday + $notifyesterday; ?></span>
                        </a>
                        <!-- Dropdown - Alerts -->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                            <h6 class="dropdown-header">
                                Notifikasi
                            </h6>
                            <a class="dropdown-item d-flex align-items-center" href="" data-toggle="modal" data-target="#todayModal">
                                <div class="mr-3">
                                </div>
                                <div>
                                    <div class="small text-gray-500">Today</div>
                                    <span class="font-weight-bold"><?= $notiftoday; ?> Berkas permintaan peminjaman</span>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="" data-toggle="modal" data-target="#yesterdayModal">
                                <div class="mr-3">
                                </div>
                                <div>
                                    <div class="small text-gray-500">Yesterday</div>
                                    <span class="font-weight-bold"><?= $notifyesterday; ?> Berkas permintaan peminjaman</span>
                                </div>
                            </a>
                        </div>
                    </li>
                <?php } else if ($this->session->userdata('level') == 2) { ?>
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-bell fa-fw"></i>
                            <!-- Counter - Alerts -->
                            <span class="badge badge-danger badge-counter"><?= $notiftoday + $notifterlambat; ?></span>
                        </a>
                        <!-- Dropdown - Alerts -->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                            <h6 class="dropdown-header">
                                Notifikasi
                            </h6>
                            <a class="dropdown-item d-flex align-items-center" href="" data-toggle="modal" data-target="#todayModal">
                                <div class="mr-3">
                                </div>
                                <div>
                                    <div class="small text-gray-500">Today</div>
                                    <span class="font-weight-bold"><?= $notiftoday; ?> Berkas harus kembali</span>
                                    <br>
                                    <span class="font-weight-bold"><?= $notifterlambat; ?> Berkas terlambat dikembalikan</span>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="" data-toggle="modal" data-target="#yesterdayModal">
                                <div class="mr-3">
                                </div>
                                <div>
                                    <div class="small text-gray-500">Yesterday</div>
                                    <span class="font-weight-bold"><?= $notifterlambat; ?> Berkas permintaan peminjaman</span>
                                </div>
                            </a>
                        </div>
                    </li>
                <?php } ?> 
                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="sidebar-brand-icon">
                            <i class="fas fa-user-circle mr-2"></i>
                        </div>
                        <span class="d-none d-lg-inline text-gray-600 small "><?= $this->session->userdata('username'); ?></span>

                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Profil
                        </a>
                        </a> </a>
                    </div>
                </li>

            </ul>
        </nav>

        <?php if ($this->session->userdata('level') == 1) { ?>
        <!-- Modal -->
        <div class="modal fade" id="todayModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Detail Notifikasi</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?php
                        foreach ($get_notiftoday as $data) { ?>
                            <a href="<?php echo base_url(); ?>peminjaman/<?= $data->id_peminjaman; ?>">
                                <div>
                                    <p> Permintaan berkas <?= $data->no_rm ?> atas nama <?= $data->nama_pasien ?></p>
                                </div>
                                <hr>
                            </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="yesterdayModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Detail Notifikasi</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?php
                        foreach ($get_notifyesterday as $data) { ?>
                            <a href="<?php echo base_url(); ?>peminjaman/<?= $data->id_peminjaman; ?>">
                                <div>
                                    <p> Permintaan berkas <?= $data->no_rm ?> atas nama <?= $data->nama_pasien ?></p>
                                </div>
                                <hr>
                            </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <?php } else { ?>
            <!-- Modal -->
            <div class="modal fade" id="todayModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Detail Notifikasi</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <?php
                            foreach ($get_notiftoday as $data) { ?>
                                <div>
                                    <p> Berkas <?= $data->no_rm ?> atas nama <?= $data->nama_pasien ?> harus kembali hari ini</p>
                                </div>
                            <?php } ?>
                            <?php
                            foreach ($get_notifterlambat as $data) { ?>
                                <div>
                                    <p class="text-danger"> Berkas <?= $data->no_rm ?> atas nama <?= $data->nama_pasien ?> batas waktu pengembalian telah terlewat</p>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>