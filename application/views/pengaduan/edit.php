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

        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"><?php echo $page_title ?></h3>
                        </div>

                        <?php if ($user['role_id'] == '1') { ?>
                            <form method="post" action="<?php echo base_url('superadmin/update_pengaduan/?id=' . $edit['id_pengaduan']); ?>" enctype="multipart/form-data">
                        <?php } ?>
                        <?php if ($user['role_id'] == '2') { ?>
                            <form method="post" action="<?php echo base_url('admin/update_pengaduan/?id=' . $edit['id_pengaduan']); ?>" enctype="multipart/form-data">
                        <?php } ?>
                            <div class="card-body">
                                <?php if ($user['role_id'] == '1') { ?>
                                    <div class="form-group mb-3">
                                        <label for="id_user">Nomor Identitas Pengaduan</label>
                                        <input type="text" class="form-control" id="id_pengaduan" name="id_pengaduan" value="<?= $edit['id_pengaduan']; ?>" readonly>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="id_user">Nomor Identitas Akun</label>
                                        <input type="text" class="form-control" id="id_user" name="id_user" value="<?= $edit['id_user']; ?>" readonly>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="nama">Nama</label>
                                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $edit['nama']; ?>" readonly>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="nik">Nomor Induk Kependudukan (NIK)</label>
                                        <input type="text" class="form-control" id="nik" name="nik" value="<?= $edit['nik']; ?>" readonly>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="pengaduan">Isi Pengaduan</label>
                                        <input type="text" class="form-control" id="pengaduan" name="pengaduan" value="<?= $edit['pengaduan']; ?>" readonly>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="jenis_pengaduan">Jenis Pengajuan</label>
                                        <select class="form-control" name="jenis_pengaduan" id="jenis_pengaduan" disabled>
                                            <option value="" selected="" disabled="">--- PILIH ---</option>
                                            <option <?php if ($edit['jenis_pengaduan'] == "E-KTP") {
                                                        echo 'selected';
                                                    } ?> value="E-KTP">E-KTP</option>
                                            <option <?php if ($edit['jenis_pengaduan'] == "AKTA KELAHIRAN") {
                                                        echo 'selected';
                                                    } ?> value="AKTA KELAHIRAN">AKTA KELAHIRAN</option>
                                            <option <?php if ($edit['jenis_pengaduan'] == "KARTU KELUARGA") {
                                                        echo 'selected';
                                                    } ?> value="KARTU KELUARGA">KARTU KELUARGA</option>
                                            <option <?php if ($edit['jenis_pengaduan'] == "LAINNYA") {
                                                        echo 'selected';
                                                    } ?> value="LAINNYA">LAINNYA</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="images[]">Foto</label>
                                        <div class="col-sm-10">
                                            <img src="<?php echo base_url('assets/images/pengaduan/') . $edit['image']; ?>" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="img-pengaduan">
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="s_pengaduan">Status Pengaduan</label>
                                        <select class="form-control" name="s_pengaduan" id="s_pengaduan">
                                            <option value="" selected="" disabled="">--- PILIH ---</option>
                                            <option <?php if ($edit['s_pengaduan'] == "0") {
                                                        echo 'selected';
                                                    } ?> value="0">Dalam Proses</option>
                                            <option <?php if ($edit['s_pengaduan'] == "1") {
                                                        echo 'selected';
                                                    } ?> value="1">Ditanggapi</option>
                                            <option <?php if ($edit['s_pengaduan'] == "2") {
                                                        echo 'selected';
                                                    } ?> value="2">Selesai</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="reason">reason</label>
                                        <input type="text" class="form-control" id="reason" name="reason" value="<?= $edit['reason']; ?>" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="created_at">created_at</label>
                                        <input type="text" class="form-control" id="created_at" name="created_at" value="<?= $edit['created_at']; ?>" readonly>
                                    </div>
                                <?php } ?>
                                <?php if ($user['role_id'] == '2') { ?>
                                    <div class="form-group mb-3">
                                        <label for="id_user">Nomor Identitas Pengaduan</label>
                                        <input type="text" class="form-control" id="id_pengaduan" name="id_pengaduan" value="<?= $edit['id_pengaduan']; ?>" readonly>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="id_user">Nomor Identitas Akun</label>
                                        <input type="text" class="form-control" id="id_user" name="id_user" value="<?= $edit['id_user']; ?>" readonly>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="nama">Nama</label>
                                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $edit['nama']; ?>" readonly>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="nik">Nomor Induk Kependudukan (NIK)</label>
                                        <input type="text" class="form-control" id="nik" name="nik" value="<?= $edit['nik']; ?>" readonly>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="pengaduan">Isi Pengaduan</label>
                                        <input type="text" class="form-control" id="pengaduan" name="pengaduan" value="<?= $edit['pengaduan']; ?>" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="jenis_pengaduan">Jenis Pengajuan</label>
                                        <select class="form-control" name="jenis_pengaduan" id="jenis_pengaduan" disabled>
                                            <option value="" selected="" disabled="">--- PILIH ---</option>
                                            <option <?php if ($edit['jenis_pengaduan'] == "E-KTP") {
                                                        echo 'selected';
                                                    } ?> value="E-KTP">E-KTP</option>
                                            <option <?php if ($edit['jenis_pengaduan'] == "AKTA KELAHIRAN") {
                                                        echo 'selected';
                                                    } ?> value="AKTA KELAHIRAN">AKTA KELAHIRAN</option>
                                            <option <?php if ($edit['jenis_pengaduan'] == "KARTU KELUARGA") {
                                                        echo 'selected';
                                                    } ?> value="KARTU KELUARGA">KARTU KELUARGA</option>
                                            <option <?php if ($edit['jenis_pengaduan'] == "LAINNYA") {
                                                        echo 'selected';
                                                    } ?> value="LAINNYA">LAINNYA</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="images[]">Foto</label>
                                        <div class="col-sm-10">
                                            <img src="<?php echo base_url('assets/images/pengaduan/') . $edit['image']; ?>" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="img-pengaduan">
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="s_pengaduan">Status Pengaduan</label>
                                        <select class="form-control" name="s_pengaduan" id="s_pengaduan">
                                            <option value="" selected="" disabled="">--- PILIH ---</option>
                                            <option <?php if ($edit['s_pengaduan'] == "0") {
                                                        echo 'selected';
                                                    } ?> value="0">Dalam Proses</option>
                                            <option <?php if ($edit['s_pengaduan'] == "1") {
                                                        echo 'selected';
                                                    } ?> value="1">Ditanggapi</option>
                                            <option <?php if ($edit['s_pengaduan'] == "2") {
                                                        echo 'selected';
                                                    } ?> value="2">Selesai</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="reason">reason</label>
                                        <input type="text" class="form-control" id="reason" name="reason" value="<?= $edit['reason']; ?>" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="created_at">created_at</label>
                                        <input type="text" class="form-control" id="created_at" name="created_at" value="<?= $edit['created_at']; ?>" readonly>
                                    </div>
                                <?php } ?>
                                <?php if ($user['role_id'] == '3') { ?>
                                    <div class="form-group mb-3">
                                        <label for="id_user">Nomor Identitas Pengaduan</label>
                                        <input type="text" class="form-control" id="id_pengaduan" name="id_pengaduan" value="<?= $edit['id_pengaduan']; ?>" readonly>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="id_user">Nomor Identitas Akun</label>
                                        <input type="text" class="form-control" id="id_user" name="id_user" value="<?= $edit['id_user']; ?>" readonly>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="nama">Nama</label>
                                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $edit['nama']; ?>" readonly>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="nik">Nomor Induk Kependudukan (NIK)</label>
                                        <input type="text" class="form-control" id="nik" name="nik" value="<?= $edit['nik']; ?>" readonly>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="pengaduan">Isi Pengaduan</label>
                                        <input type="text" class="form-control" id="pengaduan" name="pengaduan" value="<?= $edit['pengaduan']; ?>" readonly>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="jenis_pengaduan">Jenis Pengajuan</label>
                                        <select class="form-control" name="jenis_pengaduan" id="jenis_pengaduan" disabled>
                                            <option value="" selected="" disabled="">--- PILIH ---</option>
                                            <option <?php if ($edit['jenis_pengaduan'] == "E-KTP") {
                                                        echo 'selected';
                                                    } ?> value="E-KTP">E-KTP</option>
                                            <option <?php if ($edit['jenis_pengaduan'] == "AKTA KELAHIRAN") {
                                                        echo 'selected';
                                                    } ?> value="AKTA KELAHIRAN">AKTA KELAHIRAN</option>
                                            <option <?php if ($edit['jenis_pengaduan'] == "KARTU KELUARGA") {
                                                        echo 'selected';
                                                    } ?> value="KARTU KELUARGA">KARTU KELUARGA</option>
                                            <option <?php if ($edit['jenis_pengaduan'] == "LAINNYA") {
                                                        echo 'selected';
                                                    } ?> value="LAINNYA">LAINNYA</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="images[]">Foto</label>
                                        <div class="col-sm-10">
                                            <img src="<?php echo base_url('assets/images/pengaduan/') . $edit['image']; ?>" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="img-pengaduan">
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="s_pengaduan">Status Pengaduan</label>
                                        <select class="form-control" name="s_pengaduan" id="s_pengaduan" disabled>
                                            <option value="" selected="" disabled="">--- PILIH ---</option>
                                            <option <?php if ($edit['s_pengaduan'] == "0") {
                                                        echo 'selected';
                                                    } ?> value="0">Dalam Proses</option>
                                            <option <?php if ($edit['s_pengaduan'] == "1") {
                                                        echo 'selected';
                                                    } ?> value="1">Ditanggapi</option>
                                            <option <?php if ($edit['s_pengaduan'] == "2") {
                                                        echo 'selected';
                                                    } ?> value="2">Selesai</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="reason">reason</label>
                                        <input type="text" class="form-control" id="reason" name="reason" value="<?= $edit['reason']; ?>" readonly>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="created_at">created_at</label>
                                        <input type="text" class="form-control" id="created_at" name="created_at" value="<?= $this->M_data->hari(date('D', strtotime($edit['created_at']))) . ', ' . $this->M_data->tgl_indo(date('Y-m-d', strtotime($edit['created_at']))); ?>" disabled>
                                    </div>
                                <?php } ?>

                                <div class="card-footer">
                                    <?php if ($user['role_id'] == '1') { ?>
                                        <a type="button" href="<?php echo base_url('superadmin/pengaduan') ?>" class="btn btn-danger">Kembali</a>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    <?php } ?>
                                    <?php if ($user['role_id'] == '2') { ?>
                                        <a type="button" href="<?php echo base_url('admin/pengaduan') ?>" class="btn btn-danger">Kembali</a>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    <?php } ?>
                                    <?php if ($user['role_id'] == '3') { ?>
                                        <a type="button" href="<?php echo base_url('user') ?>" class="btn btn-danger">Kembali</a>
                                    <?php } ?>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

</div>

</section>

</div>