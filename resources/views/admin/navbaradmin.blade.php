<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>dashboard yayasan okmek</title>
  <!-- Favicons -->
  <link href="../user/assets/img/logo.jpeg" rel="icon">
  <link href="../user/assets/img/logo.jpeg" rel="logo.jpeg">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../admin/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../admin/assets/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="admin/assets/plugins/summernote/summernote-bs4.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

 
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/home" class="brand-link">
      <img src="../user/assets/img/logo.jpeg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Yayasan Okmek</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../user/assets/img/logo.jpeg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
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
            <a href="/home" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          <li class="nav-item">
            <a href="#" class="nav-link">
             <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Input
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="/inputwelcome" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Welcome</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="/inputberita" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Berita Terbaru</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/inputportofolio" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Portofolio</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/inputvisimisi" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Visi & Misi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/inputlogo" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Logo</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/inputpendiri" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pendiri</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/inputpembina" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pembina</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/inputpengurus" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengurus</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/inputpengawas" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengawas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/inputfotokegiatan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Foto Kegiatan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/inputfotobangunan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Foto Bangunan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/inputkarir" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Karir</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/inputunitpendidikan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Unit Pendidikan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/inputunitkesejahteraan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Unit Kesejahteraan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/inputunitbisnis" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Unit Bisnis</p>
                </a>
              </li>
            </ul>
                    <li class="nav-item">
            <a href="#" class="nav-link">
             <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Edit
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/editwelcome" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Welcome</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/listberita" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Berita</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/listportofolio" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Portofolio</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/editvisimisi" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Visi & Misi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/editlogo" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Logo</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/editpendiri" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Pendiri</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/editpembina" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Pembina</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/editpengurus" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Pengurus</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/editpengawas" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Pengawas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/editfotokegiatan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Foto Kegiatan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/editfotobangunan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Foto Bangunan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/editkarir" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Karir</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/editunitpendidikan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Unit Pendidikan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/editunitkesejahteraan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Unit Kesejahteraan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/editunitbisnis" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Unit Bisnis</p>
                </a>
              </li>
            </ul>
            <li class="nav-item">
            <a href="/logout" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Log Out
              </p>
            </a>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
@yield ('content')

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../admin/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../admin/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../admin/assets/dist/js/adminlte.min.js"></script>
<script src="../admin/assets/summernote/summernote-bs4.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../admin/assets/dist/js/demo.js"></script>
<script src="../admin/assets/datatables/jquery.dataTables.min.js"></script>
<script src="../admin/assets/datatables/dataTables.bootstrap4.min.js"></script>
<script>
  $(document).ready(function() {
            $('#dataTable').DataTable( {
                "order": [[ 0, "asc" ]]
            } );
          } ); 
</script>
      <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>
