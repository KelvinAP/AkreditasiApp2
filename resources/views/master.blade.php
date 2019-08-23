
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}" >
  <title>Akreditasi App</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="/css/app.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper" id="app">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark navbar-primary">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/dashboard" class="brand-link">
      <img src="./img/report.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Akreditasi App</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="./img/man.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Administrator</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="true">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <router-link to="/dashboard" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </router-link>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-cog"></i>
              <p>
                Data Management
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <router-link to="/penerimaan" class="nav-link">
                  <i class="fas fa-user-check nav-icon"></i>
                  <p>Penerimaan Mahasiswa</p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/profilmahasiswa" class="nav-link">
                  <i class="fas fa-users nav-icon"></i>
                  <p>Profil Mahasiswa Aktif</p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/beasiswa" class="nav-link">
                  <i class="fas fa-money-check-alt nav-icon"></i>
                  <p>Beasiswa</p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/prestasi" class="nav-link">
                  <i class="fas fa-medal nav-icon"></i>
                  <p>Prestasi & Reputasi</p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/alumni" class="nav-link">
                  <i class="fas fa-graduation-cap nav-icon"></i>
                  <p>Alumni</p>
                </router-link>
              </li>
              <li class="nav-item has-treeview">
                  <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-cog"></i>
                    <p>
                      Kuisioner Layanan
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <router-link to="/kuisionerBKDosen" class="nav-link">
                        <i class="fas fa-file-alt nav-icon"></i>
                        <p>Bimbingan Dosen PA</p>
                      </router-link>
                    </li>
                    <li class="nav-item">
                      <router-link to="/kuisionerBKKemahasiswaan" class="nav-link">
                        <i class="fas fa-file-alt nav-icon"></i>
                        <p>Konseling Mahasiswa</p>
                      </router-link>
                    </li>
                    <li class="nav-item">
                      <router-link to="/kuisionerMinatBakat" class="nav-link">
                        <i class="fas fa-file-alt nav-icon"></i>
                        <p>Minat Bakat</p>
                      </router-link>
                    </li>
                    <li class="nav-item">
                      <router-link to="/kuisionerSoftSkill" class="nav-link">
                        <i class="fas fa-file-alt nav-icon"></i>
                        <p>Soft Skill</p>
                      </router-link>
                    </li>
                    <li class="nav-item">
                      <router-link to="/kuisionerBeasiswa" class="nav-link">
                        <i class="fas fa-file-alt nav-icon"></i>
                        <p>Beasiswa</p>
                      </router-link>
                    </li>
                    <li class="nav-item">
                      <router-link to="/kuisionerKesehatan" class="nav-link">
                        <i class="fas fa-file-alt nav-icon"></i>
                        <p>Kesehatan</p>
                      </router-link>
                    </li>
                  </ul>
              </li>
              {{-- <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>PKL & Skripsi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Wisuda & Yudisium</p>
                </a>
              </li> --}}
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Borang Management
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <router-link to="/standar31" class="nav-link">
                  <i class="fas fa-th nav-icon"></i>
                  <p>Standard 3.1</p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/standar32" class="nav-link">
                  <i class="fas fa-th nav-icon"></i>
                  <p>Standard 3.2</p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/standar33" class="nav-link">
                  <i class="fas fa-th nav-icon"></i>
                  <p>Standard 3.3</p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/standar34" class="nav-link">
                  <i class="fas fa-th nav-icon"></i>
                  <p>Standard 3.4</p>
                </router-link>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-file-export nav-icon"></i>
                  <p>Export Borang</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item">
              <router-link to="/simulasi" class="nav-link">
              <i class="nav-icon fas fa-calculator"></i>
              <p>
                Simulasi Perhitungan
              </p>
            </router-link>
          </li>
          <li class="nav-item logout">
            <a href="/logout" class="nav-link">
              <button class="btn btn-danger" style="width:100%">
              <i class="nav-icon fas fa-power-off"></i>
              <p>
                Logout
              </p>
              </button>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
    <router-view></router-view>
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
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Fakultas Ilmu Komputer <a href="https://adminlte.io">Universitas Brawijaya</a>.</strong> All rights reserved.
  </footer>

  
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<script src="/js/app.js"></script>
</body>
</html>
