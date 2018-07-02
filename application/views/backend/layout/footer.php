
              </div>      
           </div>
        </div>
        <!-- /Right-bar -->
      </div>

      <!-- END wrapper -->

      <script>
          var resizefunc = [];
      </script>

      <!-- jQuery  -->
      <script src="<?php echo base_url('assets/admin_update/js/jquery.min.js')?>"></script>
      <script src="<?php echo base_url('assets/admin_update/js/bootstrap.min.js')?>"></script>
      <script src="<?php echo base_url('assets/admin_update/js/waves.js')?>"></script>
      <script src="<?php echo base_url('assets/admin_update/js/wow.min.js')?>"></script>
      <script src="<?php echo base_url('assets/admin_update/js/jquery.nicescroll.js')?>" type="text/javascript"></script>
      <script src="<?php echo base_url('assets/admin_update/js/jquery.scrollTo.min.js')?>"></script>
      <script src="<?php echo base_url('assets/admin_update/assets/chat/moment-2.2.1.js')?>"></script>
      <script src="<?php echo base_url('assets/admin_update/assets/jquery-sparkline/jquery.sparkline.min.js')?>"></script>
      <script src="<?php echo base_url('assets/admin_update/assets/jquery-detectmobile/detect.js')?>"></script>
      <script src="<?php echo base_url('assets/admin_update/assets/fastclick/fastclick.js')?>"></script>
      <script src="<?php echo base_url('assets/admin_update/assets/jquery-slimscroll/jquery.slimscroll.js')?>"></script>
      <script src="<?php echo base_url('assets/admin_update/assets/jquery-blockui/jquery.blockUI.js')?>"></script>

      <!-- sweet alerts -->
      <script src="<?php echo base_url('assets/admin_update/assets/sweet-alert/sweet-alert.min.js')?>"></script>
      <script src="<?php echo base_url('assets/admin_update/assets/sweet-alert/sweet-alert.init.js')?>"></script>

      <!-- flot Chart -->
      <script src="<?php echo base_url('assets/admin_update/assets/flot-chart/jquery.flot.js')?>"></script>
      <script src="<?php echo base_url('assets/admin_update/assets/flot-chart/jquery.flot.time.js')?>"></script>
      <script src="<?php echo base_url('assets/admin_update/assets/flot-chart/jquery.flot.tooltip.min.js')?>"></script>
      <script src="<?php echo base_url('assets/admin_update/assets/flot-chart/jquery.flot.resize.js')?>"></script>
      <script src="<?php echo base_url('assets/admin_update/assets/flot-chart/jquery.flot.pie.js')?>"></script>
      <script src="<?php echo base_url('assets/admin_update/assets/flot-chart/jquery.flot.selection.js')?>"></script>
      <script src="<?php echo base_url('assets/admin_update/assets/flot-chart/jquery.flot.stack.js')?>"></script>
      <script src="<?php echo base_url('assets/admin_update/assets/flot-chart/jquery.flot.crosshair.js')?>"></script>

      <!-- Counter-up -->
      <script src="<?php echo base_url('assets/admin_update/assets/counterup/waypoints.min.js')?>" type="text/javascript"></script>
      <script src="<?php echo base_url('assets/admin_update/assets/counterup/jquery.counterup.min.js')?>" type="text/javascript"></script>
      
      <!-- CUSTOM JS -->
      <script src="<?php echo base_url('assets/admin_update/js/jquery.app.js')?>"></script>

      <!-- Dashboard -->
      <script src="<?php echo base_url('assets/admin_update/js/jquery.dashboard.js')?>"></script>

      <!-- Chat -->
      <script src="<?php echo base_url('assets/admin_update/js/jquery.chat.js')?>"></script>

      <!-- Todo -->
      <script src="<?php echo base_url('assets/admin_update/js/jquery.todo.js')?>"></script>

      <script type="text/javascript">
        /* ==============================================
        Counter Up
        =============================================== */
        jQuery(document).ready(function($) {
          $('.counter').counterUp({
            delay: 100,
            time: 1200
          });
        });
      </script>
      <!--datatable-->
      <script src="<?php echo base_url('assets/admin_update/assets/datatables/jquery.dataTables.min.js')?>"></script>
      <script src="<?php echo base_url('assets/admin_update/assets/datatables/dataTables.bootstrap.js')?>"></script>
      <script type="text/javascript">
          $(document).ready(function() {
              $('#datatable').dataTable();
          } );
      </script>
      <!--JAM-->
      <script src="<?php echo base_url('assets/admin_update/jam/jqClock.min.js')?>"></script>
      <script type="text/javascript">
        $(document).ready(function(){    
          $("#jam").clock({"format":"24","calendar":"false"});
        });    
      </script>

      <!-- Modal-Effect -->
      <script src="<?php echo base_url('assets/admin_update/assets/modal-effect/js/classie.js')?>"></script>
      <script src="<?php echo base_url('assets/admin_update/assets/modal-effect/js/modalEffects.js')?>"></script>

    <!--   <script src="<?php echo base_url().'assets/tambahan/jquery-ui.js'?>" type="text/javascript"></script> -->
      <script src="<?php echo base_url().'assets/tambahan/bootstrap-select.min.js'?>"></script>
      <script src="<?php echo base_url().'assets/tambahan/jquery.price_format.min.js'?>"></script>

      <script type="text/javascript">
        $(".alert-message").alert().delay('4000').slideUp('slow');
      </script>
      
    
  </body>
</html>