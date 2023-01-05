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
                <table id="example1" class="table table-bordered table-striped text-center">
                    <thead>
                        <tr>
                            <th width="1%">No</th>
                            <th>Tanggal</th>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Isi Laporan</th>
                            <th>Status Pengaduan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($allpengaduan as $user1) { ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $this->M_data->hari(date('D', strtotime($user1['created_at']))) . ', ' . $this->M_data->tgl_indo(date('Y-m-d', strtotime($user1['created_at']))); ?></td>
                                <td><?= $user1['nik']; ?></td>
                                <td><?= $user1['nama']; ?></td>
                                <td><?= $user1['pengaduan']; ?></td>
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
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

        </div>
    </section>


</div>

</section>

</div>