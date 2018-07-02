

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="" class="site_title"><i class="fa fa-institution"></i> <span>Perpustakaan</span></a>
            </div>
            <div class="clearfix"></div>
           
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <!-- <h3>General</h3> -->
                <ul class="nav side-menu">
                  <li><a href="<?=base_url('dashboard')?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                  <?php if($this->session->userdata('hak_akses') == 'admin'){?>
                    <li>
                      <a href="<?=base_url('pengguna')?>" class="waves-effect"><i class="fa fa-user"></i><span> Pengguna </span></a>
                    </li>
                    <li><a><i class="fa fa-book"></i> Buku <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="<?=base_url('buku')?>">List Buku</a></li>
                        <li><a href="<?=base_url('kategori')?>">List Kategori</a></li>
                      </ul>
                    </li>
                    <li><a><i class="fa fa-exchange"></i> Transaksi <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="<?=base_url('buku/listPeminjaman')?>">List Peminjaman</a></li>
                        <li><a href="<?=base_url('buku/listPeminjam')?>">List Peminjam</a></li>
                        <li><a href="<?=base_url('buku/listKembali')?>">List Kembali</a></li>
                      </ul>
                    </li>
                    <!-- <li class="has_sub">
                      <a href="#" class="waves-effect"><i class="fa fa-book"></i><span>Buku</span><span class="pull-right"><i class="md md-add"></i></span></a>
                      <ul class="list-unstyled">
                        <li><a href="<?=base_url('buku')?>">List Buku</a></li>
                        <li><a href="<?=base_url('kategori')?>">List Kategori</a></li>
                      </ul>
                    </li> -->
                    <!-- <li class="has_sub">
                      <a href="#" class="waves-effect"><i class="fa fa-bars"></i><span>Peminjaman</span><span class="pull-right"><i class="md md-add"></i></span></a>
                      <ul class="list-unstyled">
                        <a href="<?=base_url('buku/ListPeminjaman')?>" class="waves-effect"><i class="fa fa-buy"></i><span> List Peminjaman </span></a>
                        <a href="<?=base_url('buku/ListPeminjam')?>" class="waves-effect"><i class="fa fa-buy"></i><span> List Peminjam </span></a>
                        <a href="<?=base_url('buku/listKembali')?>" class="waves-effect"><i class="fa fa-buy"></i><span> List Kembali </span></a>
                      </ul>
                    </li> -->
                  <?php }else{ ?>
                    <li>
                      <a href="<?=base_url('buku')?>" class="waves-effect"><i class="fa fa-book"></i><span> Daftar Buku </span></a>
                    </li>
                    <li>
                      <a href="<?=base_url('buku/ListPeminjaman')?>" class="waves-effect"><i class="fa fa-bars"></i><span> Peminjaman </span></a>
                    </li>
                  <?php } ?>
                  <!-- <li><a href="<?=base_url('item')?>"><i class="fa fa-cubes"></i> Item</a></li> -->
                  
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->
          </div>
        </div>
        <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><?=$title?></h2>
                  <div class="clearfix"></div>
                </div>
      
    
  