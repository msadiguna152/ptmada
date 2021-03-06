<header class="main-header">
  <!-- Logo -->
  <a href="<?php echo site_url('Admin')?>" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><img src="<?php echo base_url()?>/assets/img/bms_logo.jpg" alt=""><b>PT MADA</b></span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><img src="<?php echo base_url()?>/assets/img/bms_logo.jpg" alt=""><b>PT MADA</b></span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </a>
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <li class="dropdown tasks-menu">
          <a href="<?php echo base_url() ?>login/logout" title="Logout">
            <i class="fa fa-power-off"></i> &nbsp <b>Logout</b>
          </a>
        </li>
        <!-- Messages: style can be found in dropdown.less-->

        <!-- Notifications: style can be found in dropdown.less -->

        <!-- Tasks: style can be found in dropdown.less -->

        <!-- User Account: style can be found in dropdown.less -->

        <!-- Control Sidebar Toggle Button -->

      </ul>
    </div>
  </nav>
</header>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->

    <!-- search form -->
    <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->

    <!-- SIDEBAR 1 -->
    <ul class="sidebar-menu tree" data-widget="tree">
      <li class="header">MENU UTAMA</li>

      <li>
        <a href="<?php echo base_url('Admin/index') ?>">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>

      <li class="treeview" style="height: auto;">
        <a href="#">
          <i class="fa   fa-th-list"></i> <span>Data Master</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu" style="display: none;">
          <li><a href="<?php echo base_url('Admin/lihat_perusahaan') ?>"><i class="fa fa-circle-o"></i> Data Perusahaan</a></li>
          <li><a href="<?php echo base_url('Admin/lihat_instansi') ?>"><i class="fa fa-circle-o"></i> Data Instansi</a></li>
          <li><a href="<?php echo base_url('Admin/lihat_pejabat') ?>"><i class="fa fa-circle-o"></i> Data Pejabat Penghubung</a></li>
          <li><a href="<?php echo base_url('Admin/lihat_agent') ?>"><i class="fa fa-circle-o"></i> Data Agent</a></li>
          <li><a href="<?php echo base_url('Admin/lihat_dokumen') ?>"><i class="fa fa-circle-o"></i> Dokumen Pendukung</a></li>
          <li><a href="<?php echo base_url('Admin/lihat_jenis_jaminan') ?>"><i class="fa fa-circle-o"></i> Jenis Jaminan</a></li>
          <li><a href="<?php echo base_url('Admin/lihat_jenis_permohonan') ?>"><i class="fa fa-circle-o"></i> Jenis Permohonan</a></li>
          <li><a href="<?php echo base_url('Admin/lihat_kabupaten') ?>"><i class="fa fa-circle-o"></i> Lokasi Proyek</a></li>
          <!-- <li><a href="<?php echo base_url('Admin/lihat_persen') ?>"><i class="fa fa-circle-o"></i> Persen</a></li> -->
        </ul>
      </li>
      <li>
        <a href="<?php echo base_url('Admin/lihat_permohonan') ?>">
          <i class="fa fa-clipboard"></i> <span>Permohonan</span>
        </a>
      </li>
      <li class="treeview" style="height: auto;">
        <a href="#">
          <i class="fa fa-print"></i> <span>Laporan Admin</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu" style="display: none;">
          <li><a href="<?php echo base_url('Admin/lihat_laporan') ?>"><i class="fa fa-book"></i> Lap. Kelengkapan <br>Dok. Perusahaan</a></li>
          <li><a href="<?php echo base_url('Admin/lihat_laporan_komitmen') ?>"><i class="fa fa-book"></i>  Lap. Kelengkapan <br>Dok. Proyek</a></li>
        </ul>
      </li>
      <li>
        <a href="<?php echo base_url('Admin/lihat_perhitungan') ?>">
          <i class="fa fa-calculator"></i> <span>Master Perhitungan Tarif</span>
        </a>
      </li>
      <li>
        <a href="<?php echo base_url('Admin/lihat_permohonan_f') ?>">
          <i class="fa fa-clipboard"></i> <span>Permohonan Baru</span>
        </a>
      </li>
      <li>
        <a href="<?php echo base_url('Admin/lihat_tarif') ?>">
          <i class="fa fa-calculator"></i> <span>Perhitungan Tarif </span>
        </a>
      </li>
      <li class="treeview" style="height: auto;">
        <a href="#">
          <i class="fa fa-history"></i> <span>Transaksi</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu" style="display: none;">
          <li><a href="<?php echo base_url('Admin/lihat_transaksi') ?>"><i class="fa fa-circle-o"></i>Transaksi Permohonan</a></li>
          <li><a href="<?php echo base_url('Admin/lihat_umum') ?>"><i class="fa fa-circle-o"></i>Transaksi Umum</a></li>
        </ul>
      </li>
      <li class="treeview" style="height: auto;">
        <a href="#">
          <i class="fa fa-print"></i> <span>Laporan Finansial</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu" style="display: none;">
          <li>
            <a href="<?php echo base_url('Admin/lihat_laporan') ?>">
              <i class="fa fa-book"></i> <span>Lap. Pendapatan Perusahaan</span>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url('Admin/laporan_pemasukan') ?>">
              <i class="fa fa-book"></i> <span>Lap. Pemasukan Permohonan</span>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url('Admin/laporan_pengeluaran') ?>">
              <i class="fa fa-book"></i> <span>Lap. Pengeluaran Permohonan</span>
            </a>
          </li>
        </ul>
      </li>
      <li>
        <a href="<?php echo base_url('Admin/lihat_akun') ?>">
          <i class="fa fa-user-circle"></i> <span>Manajemen Akun</span>
        </a>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>