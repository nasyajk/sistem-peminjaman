<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pt. Subang Autocomp Indonesia</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?= base_url('AdminLTE') ?>/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('AdminLTE') ?>/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <!--<li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>-->
      </ul>
      <!--<ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="<? base_url('Auth/LogOut') ?>">
          <i class="fas fa-sign-out-alt"></i>Logout
        </a>
      </li>
    </ul>-->
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="info">
            <a href="#" class="d-block">Sistem Peminjaman</a>
          </div>
        </div>

        <!-- SidebarSearch Form -->
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

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="<?= base_url('Admin') ?>" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>Checksheet<i class="right fas fa-angle-left"></i></p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?= base_url('Fyazaki') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Lan Connection Yazaki</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('Fnonyazaki') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Lan Connection Non Yazaki</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('Femail') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Email Account Request</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('Fequipment') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Request Equipment IT</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('Ffileserver') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>File Server Request</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('Frequest') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Request Relayout PC</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('Fsoftware') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Software Trial Request Form</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('Fmeetings') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Online Meeting Request</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('Fstorage') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Storage Mobile Register Form</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('Fwork') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Work Request Form</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('Flaptop') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Request Khusus Penggunaan Laptop</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('Fapk') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Apk dan Kontrol list</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('Ftanda') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Tanda Terima Equipment IT</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('Ftte') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Tanda Terima</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('Fusername') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Form Permintaan Username & Password Oracle</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('Fhardware') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Hardware Request Form</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>Listing Checksheet<i class="right fas fa-angle-left"></i></p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?= base_url('Yazaki') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Lan Connection Yazaki</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('Nonyazaki') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Lan Connection Non Yazaki</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('Email') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Email Account Request</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('Equipment') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Request Equipment IT</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('Fileserver') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>File Server Request</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('Request') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Request Relayout PC</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('Software') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Software Trial Request Form</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('Meetings') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Online Meeting Request</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('Storage') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Storage Mobile Register Form</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('Work') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Work Request Form</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('Laptop') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Request Khusus Penggunaan Laptop</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('Apk') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Apk dan Kontrol list</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('Tanda') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Tanda Terima Equipment IT</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('Tte') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Tanda Terima</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('Username') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Form Permintaan Username & Password Oracle</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('Hardware') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Hardware Request Form</p>
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

        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">

            <?php
            if ($page) {
              echo view($page);
            }
            ?>

          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
      <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
      </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <strong>Copyright &copy; SUAI-IT ENGINEERING <?php echo date("Y"); ?></strong>
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="<?= base_url('AdminLTE') ?>/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url('AdminLTE') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url('AdminLTE') ?>/dist/js/adminlte.min.js"></script>
</body>

</html>