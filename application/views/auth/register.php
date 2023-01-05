<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $page_title ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url('assets/template')?>/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url('assets/template')?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('assets/template')?>/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="<?php echo base_url('auth') ?>" class="h3"><img class="img-responsive" style="height:75px;" src="<?php echo base_url('assets/images/') ?>logo_disduk.png"></a>
            </div>
        <div class="card-body">
            <p class="login-box-msg">Register Akun</p>
            <form action="<?php echo base_url('auth/register'); ?>" method="post">
                <div class="input-group mb-3">
                    <input type="number" class="form-control" name="nik" id="nik" placeholder="Masukan Nomor Induk Kependudukan" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
				<?= form_error('nik', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Full name" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
				<?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="input-group mb-3">
                    <input type="number" class="form-control" name="contact" id="contact" placeholder="Masukan Nomor Contact pribadi" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
				<?= form_error('contact', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="input-group mb-3">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Masukan Email" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
				<?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" name="password1" id="password1" placeholder="Masukan Password" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>

                </div>
            </form>
            <br>
            <a type="button" class="btn btn-info" href="<?php echo base_url('auth') ?>" class="text-center">Login</a>
        </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="<?php echo base_url('assets/template')?>/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url('assets/template')?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url('assets/template')?>/dist/js/adminlte.min.js"></script>
    <script src="<?php echo base_url('assets/') ?>alert.js"></script>
    <?php echo "<script>".$this->session->flashdata('message')."</script>"?>
</body>

</html>