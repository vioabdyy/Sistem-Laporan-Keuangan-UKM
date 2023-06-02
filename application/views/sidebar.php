<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->


  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?= base_url('assets/lte/'); ?>dist/img/1.png" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="Dashboard" class="d-block">Sistem Keuangan UMKM</a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <!-- <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>
  -->
  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

      <li class="nav-item ">
        <a href="<?= base_url('dashboard') ?>" class="nav-link ">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Dashboard
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?= base_url('pemasukan') ?>" class="nav-link">
          <i class="nav-icon fas fa-shopping-cart"></i>
          <p>
            Pemasukan
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?= base_url('pengeluaran') ?>" class="nav-link">
          <i class="nav-icon ion ion-bag"></i>
          <p>
            Pengeluaran
          </p>
        </a>
      </li>
      
      <li class="nav-item">
        <a href="<?= base_url('akun') ?>" class="nav-link">
          <i class="nav-icon ion ion-person-add"></i>
          <p>
            Akun UKM
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?= base_url('chart') ?>" class="nav-link">
          <i class="nav-icon ion ion-stats-bars"></i>
          <p>
            Chart Pemasukan
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?= base_url('chart_pengeluaran') ?>" class="nav-link">
          <i class="nav-icon ion ion-stats-bars"></i>
          <p>
            Chart Pengeluaran
          </p>
        </a>
      </li>
    </aside>