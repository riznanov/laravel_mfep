<?php
use Illuminate\Support\Facades\DB;
use App\Nav_model;
// use Illuminate\Support\Facades\DB;

$site                 = DB::table('konfigurasi')->first();
?>
<style type="text/css" media="screen">
  li.nav-item {
    padding-bottom: 2px !important;
    padding-top: 2px !important;
  }
  a.nav-link {
    margin-bottom: 0 !important;
    margin-top: 0 !important;
    padding-bottom: 5px !important;
    padding-top: 0px !important;
  }
  hr.sidebar-divider {
    margin-bottom: 2px !important;
    margin-top: 2px !important;
    padding-bottom: 5px !important;
    padding-top: 0px !important;
  }
  .sidebar-brand-text, .mx-1, .sidebar-brand-icon {
    font-size: 14px !important;
  }
  span.notif {
    padding: 5px !important;
    font-size: 0.55rem !important;
    font-weight: bold;
  }
  .sidebar .nav-item .nav-link span {
    font-size: 0.75rem !important;
  }
</style>
<!--Page Wrapper -->
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-left" href="{{ asset('siswa/dasbor') }}">
        <div class="sidebar-brand-icon">
          <i class="fas fa-home"></i>
        </div>
        <div class="sidebar-brand-text mx-1">{{ $site->namaweb }}</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Dashboard -->
      {{-- <li class="nav-item">
        <a class="nav-link" href="{{ asset('siswa/dasbor') }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li> --}}
      <!-- Data Siswa -->
      <hr class="sidebar-divider">
      <div class="sidebar-heading">Data Siswa</div>
      <hr class="sidebar-divider">
      <li class="nav-item">
        <?php

          $user_id = Session()->get('id_user');
          if (DB::table('datasiswa')->where('id_siswa','=', $user_id)->doesntExist()) {
            ?> <a class="nav-link" href="{{ asset('siswa/datasiswa/tambah') }}">
          <?php }elseif(DB::table('datasiswa')->where('id_siswa','=', $user_id)->exists()
                        && DB::table('ortu_siswa')->where('id_siswa','=', $user_id)->doesntExist()) { ?>
            <a class="nav-link" href="{{ asset('siswa/datasiswa/tambah_data_ortu') }}">
              <?php }elseif(DB::table('datasiswa')->where('id_siswa','=', $user_id)->exists()
              && DB::table('ortu_siswa')->where('id_siswa','=', $user_id)->exists()
              && DB::table('nilai_siswa')->where('id_siswa','=', $user_id)->doesntExist()) { ?>
                <a class="nav-link" href="{{ asset('siswa/datasiswa/tambah_data_dokumen') }}">
        <?php }elseif(DB::table('datasiswa')->where('id_siswa','=', $user_id)->exists()
        && DB::table('ortu_siswa')->where('id_siswa','=', $user_id)->exists()
        && DB::table('nilai_siswa')->where('id_siswa','=', $user_id)->exists()
        && DB::table('dok_siswa')->where('id_siswa','=', $user_id)->doesntExist()) { ?>
            <a class="nav-link" href="{{ asset('siswa/datasiswa/upload_dokumen') }}">
    <?php }else { ?>
        <a class="nav-link" href="{{ asset('siswa/datasiswa/done_datasiswa') }}">
<?php } ?>


          <i class="fas fa-fw fa-plus"></i> <span>Input Data Siswa</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ asset('siswa/datasiswa/view_datasiswa') }}">
          <i class="fas fa-fw fa-book"></i> <span>Data Siswa</span></a>
      </li>

      <!-- TRANSAKSI -->
      <hr class="sidebar-divider">
      <div class="sidebar-heading">Pengumunan Seleksi</div>
      <hr class="sidebar-divider">
      <li class="nav-item">
        <a class="nav-link" href="{{ asset('siswa/pengumuman') }}">
          <i class="fas fa-fw fa-bullhorn"></i> <span>Pengumuman Seleksi Kelas Berprestasi</span></a>
      </li>

      <?php if(Session()->get('akses_level')=="Siswa") { ?>
      <li class="nav-item">
        <a class="nav-link" href="{{ asset('siswa/user') }}">
          <i class="fa fa-fw fa-lock"></i> <span>Pengguna Website</span></a>
      </li>
      <!-- Konfigurasi -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Konfigurasi" aria-expanded="true" aria-controls="collapse') }}">
          <i class="fa fa-fw fa-cog"></i>
          <span>Setting</span>
        </a>
        <div id="Konfigurasi" class="collapse" aria-labelledby="Konfigurasi" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ asset('siswa/konfigurasi') }}"><i class="fa fa-newspaper"></i> Setting Website</a>
            <a class="collapse-item" href="{{ asset('siswa/konfigurasi/logo') }}"><i class="fa fa-image"></i> Ganti Logo</a>
            <a class="collapse-item" href="{{ asset('siswa/konfigurasi/icon') }}"><i class="fa fa-tree"></i> Ganti Icon</a>
            <a class="collapse-item" href="{{ asset('siswa/konfigurasi/email') }}"><i class="fa fa-envelope"></i> Setting Email</a>
            <a class="collapse-item" href="{{ asset('siswa/konfigurasi/gambar') }}"><i class="fa fa-lock"></i> Ganti Gambar Login</a>
            <a class="collapse-item" href="{{ asset('siswa/rekening') }}"><i class="fa fa-money-check"></i> Rekening Pembayaran</a>
            <a class="collapse-item" href="{{ asset('siswa/konfigurasi/pembayaran') }}"><i class="fa fa-comment-dollar"></i> Panduan Pembayaran</a>
          </div>
        </div>
      </li>
    <?php } ?>
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">
      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>
    </ul>
    <!-- End of Sidebar -->
