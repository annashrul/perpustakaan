
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">
    <link rel="shortcut icon" href="images/favicon_1.ico">
    <title><?=$title?></title>
    <!-- Base Css Files -->
    <link href="<?=base_url('assets/admin_update/css/bootstrap.min.css')?>" rel="stylesheet" />
    <!-- Font Icons -->
    <link href="<?=base_url('assets/admin_update/assets/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet" />
    <link href="<?=base_url('assets/admin_update/assets/ionicon/css/ionicons.min.css')?>" rel="stylesheet" />
    <link href="<?=base_url('assets/admin_update/css/material-design-iconic-font.min.css')?>" rel="stylesheet">
    <!-- animate css -->
    <link href="<?=base_url('assets/admin_update/css/animate.css')?>" rel="stylesheet" />
    <!-- Waves-effect -->
    <link href="<?=base_url('assets/admin_update/css/waves-effect.css')?>" rel="stylesheet">
    <!-- Custom Files -->
    <link href="<?=base_url('assets/admin_update/css/helper.css')?>" rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets/admin_update/css/style.css')?>" rel="stylesheet" type="text/css" />
    <script src="<?=base_url('assets/admin_update/js/modernizr.min.js')?>"></script>
    
  </head>
  <style type="text/css" media="screen">
    .alert{border-radius:0px;background-color:#d32f2f;color:white!important;border:none;}
  </style>
  <body>
    <div class="wrapper-page">
      <div class="panel panel-color panel-primary panel-pages">
        <div class="panel-heading bg-img"> 
          <div class="bg-overlay" style="background-color:#2A3F54;"></div>
          <h3 class="text-center m-t-10 text-white"><strong><?=$title?></strong> </h3>
        </div> 
        <div class="panel-body">
          <form class="form-horizontal m-t-20" action="<?=base_url('admin')?>" method="post">
            <?php if($this->session->flashdata('sukses')){
              echo "<div class='alert alert-success'>";
              echo $this->session->flashdata('sukses');
              echo "</div>";
            }
            ?>
            <div class="form-group ">
              <div class="col-xs-12">
                <input class="form-control input-lg" name="username" type="text" required="" placeholder="Username">
              </div>
            </div>
            <div class="form-group">
              <div class="col-xs-12">
                <input class="form-control input-lg" name="password" type="password" required="" placeholder="Password">
              </div>
            </div>
            <div class="form-group text-center m-t-40">
              <div class="col-xs-12">
                <button class="btn btn-primary btn-lg w-lg waves-effect waves-light" name="submit" type="submit" style="background-color:#2A3F54;">Log In</button>
                <a href="<?=base_url('admin/register')?>" class="btn btn-default btn-lg w-lg waves-effect waves-light">Registrasi</a>
              </div>
            </div>
          </form> 
        </div>                                 
      </div>
    </div>
    <script>
      var resizefunc = [];
    </script>
    <script src="<?=base_url('assets/admin_update/js/jquery.min.js')?>"></script>
    <script src="<?=base_url('assets/admin_update/js/bootstrap.min.js')?>"></script>
    <script src="<?=base_url('assets/admin_update/js/waves.js')?>"></script>
    <script src="<?=base_url('assets/admin_update/js/wow.min.js')?>"></script>
    <script src="<?=base_url('assets/admin_update/js/jquery.nicescroll.js')?>" type="text/javascript"></script>
    <script src="<?=base_url('assets/admin_update/js/jquery.scrollTo.min.js')?>"></script>
    <script src="<?=base_url('assets/admin_update/assets/jquery-detectmobile/detect.js')?>"></script>
    <script src="<?=base_url('assets/admin_update/assets/fastclick/fastclick.js')?>"></script>
    <script src="<?=base_url('assets/admin_update/assets/jquery-slimscroll/jquery.slimscroll.js')?>"></script>
    <script src="<?=base_url('assets/admin_update/assets/jquery-blockui/jquery.blockUI.js')?>"></script>
    <!-- CUSTOM JS -->
    <script src="<?=base_url('assets/admin_update/js/jquery.app.js')?>"></script>
  </body>
</html>