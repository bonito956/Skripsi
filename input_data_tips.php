<?php
    include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>BIRDPEDIA</title>
        <link rel="shortcut icon" href="assets/img/favicon.ico">

        
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="assets/adminlte/plugins/fontawesome-free/css/all.min.css">
        <!-- IonIcons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="assets/adminlte/dist/css/adminlte.min.css">
    </head>


    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                            <i class="fas fa-bars"></i>
                        </a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="index.php" class="nav-link">Home</a>
                    </li>
                </ul>

                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                            <i class="fas fa-expand-arrows-alt"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                            <i class="fas fa-th-large"></i>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4 navbarkiri">
                <!-- Brand Logo -->
                <a href="#" class="brand-link">
                    <img src="assets/img/favicon.ico" alt="logo" class="brand-image img-circle" style="opacity: .8">
                    <span class="brand-text font-weight-light">BIRDPEDIA</span>
                </a>

                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-tachometer-alt"></i>
                                    <p>
                                        Dashboard
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Data
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="dashboard_info.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Informasi</p>
                                        </a>
                                    </li>
                                    <li class="nav-item active menu-open">
                                        <a href="dashboard_tips.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Tips</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="dashboard_konsul.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Konsultasi</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <h1 class="m-0">Tambah Data Tips</h1>
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->

                <!-- Main content -->
                <div class="content">
                    <div class="container">
                        <div class="col-12">
                            <form class="form-horizontal" data-toggle="validator" role="form" method="post" action="simpan_tips.php"  enctype="multipart/form-data">
                                <div class="form-group has-feedback">
                                    <p><b>Judul Tips:</b></p>
                                    <div class="col-md-15">
                                        <input type="text" class="form-control" required name="judul_tips" id="judul_tips" data-error="Isi data dengan benar">
                                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                        <div class="help-block with-errors" role="alert"></div>
                                    </div>
                                </div>
                                <div class="form-group has-feedback">
                                    <p><b>Tanggal Tips:</b></p>
                                    <div class="col-md-15">
                                        <input type="text" class="form-control" required name="tanggal_tips" id="tanggal_tips" data-error="Isi kolom dengan benar">
                                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                        <div class="help-block with-errors" role="alert"></div>
                                    </div>
                                </div>
                                <div class="form-group has-feedback">
                                    <p><b>Isi Tips:</b></p>
                                    <div class="col-md-15">
                                        <input type="text" class="form-control" required name="isi_tips" id="isi_tips" data-error="Isi kolom dengan benar">
                                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                        <div class="help-block with-errors" role="alert"></div>
                                    </div>
                                </div>
                                <div class="form-group has-feedback">
                                    <p><b>Gambar Tips:</b></p>
                                    <div class="col-md-15">
                                        <input type="file" class="form-control" required name="foto" id="foto" data-error="Isi kolom dengan benar">
                                    </div>
                                </div>
                                <button type="submit" name ="submit" class="btn btn-primary">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <strong>18102261 - Birdpedia</strong>
            </div>
        </footer>
        <!-- ./wrapper -->

        <!-- REQUIRED SCRIPTS -->

        <!-- jQuery -->
        <script src="assets/adminlte/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE -->
        <script src="assets/adminlte/dist/js/adminlte.js"></script>

        <!-- OPTIONAL SCRIPTS -->
        <script src="assets/adminlte/plugins/chart.js/Chart.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="assets/adminlte/dist/js/demo.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="assets/adminlte/dist/js/pages/dashboard3.js"></script>
    </body>
</html>
