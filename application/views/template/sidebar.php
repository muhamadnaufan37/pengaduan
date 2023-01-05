<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo base_url('assets/template/dist/img/') . $user['image']; ?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?= $user['nama']; ?></a>
            </div>
        </div>

        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-header">CORE</li>
                <li class="nav-item">
                    <?php if ($user['role_id'] == '1') { ?>
                        <a href="<?php echo base_url('superadmin') ?>" class="nav-link active">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    <?php } ?>
                    <?php if ($user['role_id'] == '2') { ?>
                        <a href="<?php echo base_url('admin') ?>" class="nav-link active">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    <?php } ?>
                    <?php if ($user['role_id'] == '3') { ?>
                        <a href="<?php echo base_url('user') ?>" class="nav-link active">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    <?php } ?>
                </li>
                <br>
                <?php if ($user['role_id'] == '1') { ?>
                    <li class="nav-header">ADDONS</li>
                    <li class="nav-item">
                        <a href="<?php echo base_url('superadmin/pengaduan') ?>" class="nav-link">
                            <i class="nav-icon fas fa-table"></i>
                            <p>
                                Kelola pengaduan
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?php echo base_url('superadmin/tbl1') ?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Tabel Pengaduan dalam proses</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo base_url('superadmin/tbl2') ?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Tabel Pengaduan Ditanggapi</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo base_url('superadmin/tbl3') ?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Tabel Pengaduan Selesai</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <br>
                    <li class="nav-header">REPORT</li>
                    <li class="nav-item">
                        <a href="<?php echo base_url('superadmin/report') ?>" class="nav-link">
                            <i class="nav-icon fas fa-signal"></i>
                            <p>
                            Cetak Laporan
                            </p>
                        </a>
                    </li>
                <?php } ?>
                <?php if ($user['role_id'] == '2') { ?>
                    <li class="nav-header">REPORT</li>
                    <li class="nav-item">
                        <a href="<?php echo base_url('admin/report') ?>" class="nav-link">
                            <i class="nav-icon fas fa-signal"></i>
                            <p>
                                Cetak Laporan
                            </p>
                        </a>
                    </li>
                <?php } ?>
                <br>
                <?php if ($user['role_id'] == '1') { ?>
                <li class="nav-header">USER MANAGEMENT</li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Pengguna
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?php echo base_url('superadmin/akunuser') ?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Masyarakat</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo base_url('superadmin/akun') ?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Petugas</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                <?php } ?>
                <?php if ($user['role_id'] == '3') { ?>
                    <li class="nav-header">MENU</li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-table"></i>
                            <p>
                                Pengaduan
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?php echo base_url('user/pengaduan') ?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Data Pengaduan</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo base_url('user/add_pengaduan') ?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Tambah Pengaduan</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                <?php } ?>
                <br>
                <li class="nav-item">
                    <a href="<?php echo base_url('auth/logout') ?>" class="nav-link">
                        <i class="nav-icon fas fa-fw fa-sign-out-alt"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>