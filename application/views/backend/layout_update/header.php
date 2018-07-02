<?php
  $this->session->userdata('id_admin'); 
  $id_admin = $this->session->userdata('id_admin');
  $admin = $this->m_admin->detail($id_admin);
?>                <!-- top navigation -->


<div class="top_nav">
  <div class="nav_menu">
    <nav>
      <div class="nav toggle">
        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
      </div>
      <ul class="nav navbar-nav navbar-right">
        <li class="">
          <?php if($this->session->userdata('hak_akses') == 'admin'){?>
          <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            <i class="fa fa-user"></i> <?=$admin->username?> ( Administrator )
            <span class=" fa fa-angle-down"></span>
          </a>
          <?php }else{ ?>
          <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            <i class="fa fa-user"></i> <?=$admin->username?> ( Pengunjung )
            <span class=" fa fa-angle-down"></span>
          </a>
          <?php } ?>
          <ul class="dropdown-menu dropdown-usermenu pull-right">
            <li><a href=""> Profile</a></li>
            <!-- <li>
              <a href="javascript:;">
                <span class="badge bg-red pull-right">50%</span>
                <span>Settings</span>
              </a>
            </li>
            <li><a href="javascript:;">Help</a></li> -->
            <li><a href="<?=base_url('admin/logout')?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
          </ul>
        </li>
        
      </ul>
    </nav>
  </div>
</div>
<!-- /top navigation -->
        
        
      

