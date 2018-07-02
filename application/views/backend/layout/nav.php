<?php
  $this->session->userdata('id_admin'); 
  $id_admin = $this->session->userdata('id_admin');
  $admin = $this->m_admin->detail($id_admin);
?>

<div class="left side-menu">
  <div class="sidebar-inner slimscrollleft">
    <div class="user-details">
      <div class="pull-left">
          <img src="" alt="" class="thumb-md img-circle">
      </div>
      <div class="user-info">
        <div class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><?=$admin->username?><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href=""><i class="md md-face-unlock"></i> Profile<div class="ripple-wrapper"></div></a></li>
            <li><a href="javascript:void(0)"><i class="md md-settings"></i> Settings</a></li>
            <li><a href="javascript:void(0)"><i class="md md-lock"></i> Lock screen</a></li>
            <li><a href="<?=base_url('admin/logout')?>"><i class="md md-settings-power"></i> Logout</a></li>
          </ul>
        </div>
        <?php if($this->session->userdata('hak_akses') == 'admin'){?>
        <p class="text-muted m-0">Administrator</p>
        <?php }else{ ?>
        <p class="text-muted m-0">Pengunjung</p>
        <?php } ?>
      </div>
    </div>
    <!--- Divider -->
    <div id="sidebar-menu">
      <ul>
        <!--VIEW WEBSITE-->
        <li>
          <a href="<?=base_url('dashboard')?>" class="waves-effect"><i class="fa fa-dashboard"></i><span> Dashboard </span></a>
        </li>
        <!--BUKU-->
        <?php if($this->session->userdata('hak_akses') == 'admin'){?>
          <li>
            <a href="<?=base_url('pengguna')?>" class="waves-effect"><i class="fa fa-user"></i><span> Pengguna </span></a>
          </li>
          <li class="has_sub">
            <a href="#" class="waves-effect"><i class="fa fa-user"></i><span>Buku</span><span class="pull-right"><i class="md md-add"></i></span></a>
            <ul class="list-unstyled">
              <li><a href="<?=base_url('buku')?>">List Buku</a></li>
              <li><a href="<?=base_url('kategori')?>">List Kategori</a></li>
            </ul>
          </li>
          <li class="has_sub">
            <a href="#" class="waves-effect"><i class="fa fa-bars"></i><span>Peminjaman</span><span class="pull-right"><i class="md md-add"></i></span></a>
            <ul class="list-unstyled">
              <a href="<?=base_url('buku/ListPeminjaman')?>" class="waves-effect"><i class="fa fa-buy"></i><span> List Peminjaman </span></a>
              <a href="<?=base_url('buku/ListPeminjam')?>" class="waves-effect"><i class="fa fa-buy"></i><span> List Peminjam </span></a>
              <a href="<?=base_url('buku/listKembali')?>" class="waves-effect"><i class="fa fa-buy"></i><span> List Kembali </span></a>
            </ul>
          </li>
        <?php }else{ ?>
          <li>
            <a href="<?=base_url('buku')?>" class="waves-effect"><i class="fa fa-book"></i><span> Daftar Buku </span></a>
          </li>
          <li>
            <a href="<?=base_url('buku/ListPeminjaman')?>" class="waves-effect"><i class="fa fa-bars"></i><span> Peminjaman </span></a>
          </li>
        <?php } ?>
      </ul>
    </div>
  </div>
</div>

<div class="content-page">
  <!-- Start content -->
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h4 class="pull-left page-title"><?=$title ?> <i class="md md-user"></i></h4>
          <ol class="breadcrumb pull-right">
            <li>
              <a href="#"><i class="fa fa-calendar"></i>
                <?php 
                  date_default_timezone_set('Asia/Jakarta');
                  $tgl_sekarang = date('d F Y');
                  echo $tgl_sekarang;
                ?>                              
              </a>
            </li>
            <li><a href="" id="jam"></a></li>
            <li><a href="#">Perpustakaan</a></li>
          </ol>
        </div>
      </div>
    </div>
  
  </nav>
