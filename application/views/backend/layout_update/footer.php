                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Point Of Sale by <a href="https://anasrulysf.com/">Anasrulysf</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
   
    
   
    <!-- Bootstrap -->
    <script src="<?=base_url('assets/admin/vendors/bootstrap/dist/js/bootstrap.min.js')?>"></script>
    <!-- FastClick -->
    <script src="<?=base_url('assets/admin/vendors/fastclick/lib/fastclick.js')?>"></script>
    <!-- NProgress -->
    <script src="<?=base_url('assets/admin/vendors/nprogress/nprogress.js')?>"></script>
    <!-- iCheck -->
    <script src="<?=base_url('assets/admin/vendors/iCheck/icheck.min.js')?>"></script>
    <!-- Datatables -->
    <script src="<?=base_url('assets/admin/vendors/datatables.net/js/jquery.dataTables.min.js')?>"></script>
    <script src="<?=base_url('assets/admin/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')?>"></script>
    <script src="<?=base_url('assets/admin/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')?>"></script>
    <script src="<?=base_url('assets/admin/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')?>"></script>
    <script src="<?=base_url('assets/admin/vendors/datatables.net-buttons/js/buttons.flash.min.js')?>"></script>
    <script src="<?=base_url('assets/admin/vendors/datatables.net-buttons/js/buttons.html5.min.js')?>"></script>
    <script src="<?=base_url('assets/admin/vendors/datatables.net-buttons/js/buttons.print.min.js')?>"></script>
    <script src="<?=base_url('assets/admin/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')?>"></script>
    <script src="<?=base_url('assets/admin/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')?>"></script>
    <script src="<?=base_url('assets/admin/vendors/datatables.net-responsive/js/dataTables.responsive.min.js')?>"></script>
    <script src="<?=base_url('assets/admin/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')?>"></script>
    <script src="<?=base_url('assets/admin/vendors/datatables.net-scroller/js/dataTables.scroller.min.js')?>"></script>
    <script src="<?=base_url('assets/admin/vendors/jszip/dist/jszip.min.js')?>"></script>
    <script src="<?=base_url('assets/admin/vendors/pdfmake/build/pdfmake.min.js')?>"></script>
    <script src="<?=base_url('assets/admin/vendors/pdfmake/build/vfs_fonts.js')?>"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?=base_url('assets/admin/build/js/custom.min.js')?>"></script>
    <script src="<?php echo base_url().'assets/tambahan/bootstrap-select.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/tambahan/jquery.price_format.min.js'?>"></script>

    <script type="text/javascript">
      //*********FIELD JADI ANGKA 0 KETIKA TIDAK DIISI***//
      $(function(){
        $('.harpok').priceFormat({
          prefix: '',
          //centsSeparator: '',
          centsLimit: 0,
          thousandsSeparator: ','
        });
      });

      $(".alert-message").alert().delay('3000').slideUp('slow');
    </script>
    
    <script src="<?php echo base_url().'assets/tambahan/jquery-ui.js'?>" type="text/javascript"></script>


  </body>
</html>