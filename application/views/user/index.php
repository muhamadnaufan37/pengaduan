<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('user') ?>">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-3 col-6">

                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3><?= $jumlahall; ?></h3>
                            <p>Data Pengaduan</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">

                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3><?= $jumlah0; ?></h3>
                            <p>Dalam Proses</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="<?php echo base_url('user/tbl1') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">

                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3><?= $jumlah2; ?></h3>
                            <p>Selesai</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="<?php echo base_url('user/tbl2') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">

                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3><?= $jumlah1; ?></h3>
                            <p>Ditanggapi</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="<?php echo base_url('user/tbl3') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tabel <?php echo $page_title ?></h3>
                <?php if ($user['role_id'] == '3') { ?>
                    <a style="float: right;" href="<?php echo base_url('user/add_pengaduan') ?>" class="btn btn-sm btn-success">Tambah data</a>
                <?php } ?>
            </div>

            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped text-center">
                    <thead>
                        <tr>
                            <th width="1%">No</th>
                            <th>Nama</th>
                            <th>Pengaduan</th>
                            <th>Jenis Pengaduan</th>
                            <th>Status Pengaduan</th>
                            <th>Tanggapan</th>
                            <th>Tanggal Dibuat</th>
                            <th>Foto</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($allpengaduan as $user1) { ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $user1['nama']; ?></td>
                                <td><?= $user1['pengaduan']; ?></td>
                                <td>
                                    <span>
                                        <?php if ($user1['jenis_pengaduan'] == 'E-KTP') { ?>
                                            <div type="button" class="btn btn-block btn-warning btn-sm disabled">E-KTP</div>
                                        <?php } ?>
                                    </span>
                                    <span>
                                        <?php if ($user1['jenis_pengaduan'] == 'AKTA KELAHIRAN') { ?>
                                            <div type="button" class="btn btn-block btn-danger btn-sm disabled">AKTA KELAHIRAN</div>
                                        <?php } ?>
                                    </span>
                                    <span>
                                        <?php if ($user1['jenis_pengaduan'] == 'KARTU KELUARGA') { ?>
                                            <div type="button" class="btn btn-block btn-success btn-sm disabled">KARTU KELUARGA</div>
                                        <?php } ?>
                                    </span>
                                    <span>
                                        <?php if ($user1['jenis_pengaduan'] == 'LAINNYA') { ?>
                                            <div type="button" class="btn btn-block btn-secondary btn-sm disabled">LAINNYA</div>
                                        <?php } ?>
                                    </span>
                                </td>
                                <td>
                                    <span>
                                        <?php if ($user1['s_pengaduan'] == '0') { ?>
                                            <div type="button" class="btn btn-block btn-warning btn-sm disabled">Dalam Proses</div>
                                        <?php } ?>
                                    </span>
                                    <span>
                                        <?php if ($user1['s_pengaduan'] == '1') { ?>
                                            <div type="button" class="btn btn-block btn-danger btn-sm disabled">Ditanggapi</div>
                                        <?php } ?>
                                    </span>
                                    <span>
                                        <?php if ($user1['s_pengaduan'] == '2') { ?>
                                            <div type="button" class="btn btn-block btn-success btn-sm disabled">Selesai</div>
                                        <?php } ?>
                                    </span>
                                </td>
                                <td>
                                    <?php if ($user1['reason'] == '') { ?>
                                        <div type="button" class="btn btn-secondary disabled">Belum ada Tanggapan</div>
                                    <?php } else {
                                        echo $user1['reason'];
                                    } ?>
                                </td>
                                <td><?= $this->M_data->hari(date('D', strtotime($user1['created_at']))) . ', ' . $this->M_data->tgl_indo(date('Y-m-d', strtotime($user1['created_at']))); ?></td>
                                <td><img src="<?php echo base_url('assets/images/pengaduan/') . $user1['image']; ?>" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="img-pengaduan"></td>
                                <td>
                                    <?php if ($user['role_id'] == '1') { ?>
                                        <a type="button" href="<?= base_url('superadmin/edit_pengaduan/?id_pengaduan=' . $user1['id_pengaduan']) ?>" class="btn btn-warning btn-sm"><span class="fas fa-edit"></span></a>
                                        <a type="button" onclick="return confirm('apakah anda yakin ingin menghapus data ini?')" href="<?= base_url('superadmin/delete_pengaduan/' . $user1['id_pengaduan']) ?>" class="btn btn-danger btn-sm"><span class="fas fa-trash"></span></a>
                                    <?php } ?>
                                    <?php if ($user['role_id'] == '2') { ?>
                                        <a type="button" href="<?= base_url('admin/edit_pengaduan/?id_pengaduan=' . $user1['id_pengaduan']) ?>" class="btn btn-warning btn-sm"><span class="fas fa-edit"></span></a>
                                        <a type="button" onclick="return confirm('apakah anda yakin ingin menghapus data ini?')" href="<?= base_url('admin/delete_pengaduan/' . $user1['id_pengaduan']) ?>" class="btn btn-danger btn-sm"><span class="fas fa-trash"></span></a>
                                    <?php } ?>
                                    <?php if ($user['role_id'] == '3') { ?>
                                        <a type="button" href="<?= base_url('user/edit_pengaduan/?id_pengaduan=' . $user1['id_pengaduan']) ?>" class="btn btn-info btn-sm"><span class="fas fa-eye"></span></a>
                                        <a type="button" onclick="return confirm('apakah anda yakin ingin menghapus data ini?')" href="<?= base_url('user/delete_pengaduan/' . $user1['id_pengaduan']) ?>" class="btn btn-danger btn-sm"><span class="fas fa-trash"></span></a>
                                    <?php } ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th width="1%">No</th>
                            <th>Nama</th>
                            <th>Pengaduan</th>
                            <th>Jenis Pengaduan</th>
                            <th>Status Akun</th>
                            <th>Tanggapan</th>
                            <th>Tanggal Dibuat</th>
                            <th>Foto</th>
                            <th>Option</th>
                        </tr>
                    </tfoot>
                </table>
            </div>

        </div>
    </section>
    <!-- /.content -->
</div>