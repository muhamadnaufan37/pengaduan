<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?php echo $page_title ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <?php if ($user['role_id'] == '1') { ?>
                            <li class="breadcrumb-item"><a href="<?php echo base_url('superadmin') ?>">Home</a></li>
                        <?php } ?>
                        <?php if ($user['role_id'] == '2') { ?>
                            <li class="breadcrumb-item"><a href="<?php echo base_url('admin') ?>">Home</a></li>
                        <?php } ?>
                        <?php if ($user['role_id'] == '3') { ?>
                            <li class="breadcrumb-item"><a href="<?php echo base_url('user') ?>">Home</a></li>
                        <?php } ?>
                        <li class="breadcrumb-item active"><?php echo $page_title ?></li>
                    </ol>
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
                <table id="example2" class="table table-bordered table-striped text-center">
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
                                        <a type="button" href="<?= base_url('user/edit_pengaduan/?id_pengaduan=' . $user1['id_pengaduan']) ?>" class="btn btn-warning btn-sm"><span class="fas fa-edit"></span></a>
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


</div>

</section>

</div>