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

                        <form method="post" action="<?php echo base_url('user/add_pengaduan'); ?>" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="id_user">Nomor Identitas Akun</label>
                                    <input type="text" class="form-control" id="id_user" name="id_user" value="<?= $user['id']; ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $user['nama']; ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="nik">Nomor Induk Kependudukan (NIK)</label>
                                    <input type="text" class="form-control" id="nik" name="nik" value="<?= $user['nik']; ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="pengaduan">Isi Pengaduan</label>
                                    <input type="text" class="form-control" id="pengaduan" name="pengaduan" placeholder="ceritakan keluhan yang terjadi" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="jenis_pengaduan">Jenis Pengajuan</label>
                                    <select class="form-control" name="jenis_pengaduan" id="jenis_pengaduan">
                                        <option value="" selected="" disabled="">--- PILIH ---</option>
                                        <option value="E-KTP">E-KTP</option>
                                        <option value="AKTA KELAHIRAN">AKTA KELAHIRAN</option>
                                        <option value="KARTU KELUARGA">KARTU KELUARGA</option>
                                        <option value="LAINNYA">LAINNYA</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="images[]">Foto <font color="red">(Size foto tidak boleh melebihi dari 2mb dan format foto yang diterima oleh sistem .png atau .jpg)</font></label>
                                    <div class="col-sm-10">
                                        <input type="file" id="images[]" name="images[]" multiple required />
                                    </div>
                                </div>

                                <div class="card-footer">
                                    <?php if ($user['role_id'] == '1') { ?>
                                        <a type="button" href="<?php echo base_url('superadmin/pengaduan') ?>" class="btn btn-danger">Kembali</a>
                                    <?php } ?>
                                    <?php if ($user['role_id'] == '2') { ?>
                                        <a type="button" href="<?php echo base_url('admin/pengaduan') ?>" class="btn btn-danger">Kembali</a>
                                    <?php } ?>
                                    <?php if ($user['role_id'] == '3') { ?>
                                        <a type="button" href="<?php echo base_url('user') ?>" class="btn btn-danger">Kembali</a>
                                    <?php } ?>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

</div>

</section>

</div>