<footer class="main-footer">
  <strong>Copyright &copy; 2022 Laravel.</strong>
  All rights reserved.
  <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
  </div>
  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>
<script src="<?php echo e(asset('adminlte/plugins/jquery/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('adminlte/plugins/jquery-ui/jquery-ui.min.js')); ?>"></script>
<script>$.widget.bridge('uibutton', $.ui.button)</script>
<script src="<?php echo e(asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('adminlte/plugins/chart.js/Chart.min.js')); ?>"></script>
<script src="<?php echo e(asset('adminlte/plugins/sparklines/sparkline.js')); ?>"></script>
<script src="<?php echo e(asset('adminlte/plugins/jqvmap/jquery.vmap.min.js')); ?>"></script>
<script src="<?php echo e(asset('adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js')); ?>"></script>
<script src="<?php echo e(asset('adminlte/plugins/jquery-knob/jquery.knob.min.js')); ?>"></script>
<script src="<?php echo e(asset('adminlte/plugins/moment/moment.min.js')); ?>"></script>
<script src="<?php echo e(asset('adminlte/plugins/daterangepicker/daterangepicker.js')); ?>"></script>
<script src="<?php echo e(asset('adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')); ?>"></script>
<script src="<?php echo e(asset('adminlte/plugins/summernote/summernote-bs4.min.js')); ?>"></script>
<script src="<?php echo e(asset('adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')); ?>"></script>
<script src="<?php echo e(asset('adminlte/dist/js/adminlte.js')); ?>"></script>
<script src="<?php echo e(asset('adminlte/dist/js/pages/dashboard.js')); ?>"></script>
<script src="<?php echo e(asset('adminlte/plugins/datatables/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')); ?>"></script>
<script src="<?php echo e(asset('adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js')); ?>"></script>
<script src="<?php echo e(asset('adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')); ?>"></script>
<script src="<?php echo e(asset('adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js')); ?>"></script>
<script src="<?php echo e(asset('adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')); ?>"></script>
<script src="<?php echo e(asset('adminlte/plugins/datatables-buttons/js/buttons.html5.min.js')); ?>"></script>
<script src="<?php echo e(asset('adminlte/plugins/datatables-buttons/js/buttons.print.min.js')); ?>"></script>
<script src="<?php echo e(asset('adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js')); ?>"></script>
<script src="<?php echo e(asset('adminlte/plugins/jquery/jquery.min.js')); ?>"></script>


<?php echo $__env->yieldContent('js'); ?>




</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>                                
<script type="text/javascript">
    $(function() {
        $('#datepicker').datepicker();
    });
</script>

<?php if(isset($controllers)): ?>  
  <script>
    $(".deleteRecord").click(function(){
      var id = $(this).data("id");
      var token = $("meta[name='csrf-token']").attr("content");
      var result = confirm("Want to delete?");
  if (result) {

      $.ajax(
      {
          url: "<?php echo e($controllers); ?>/"+id,
          type: 'DELETE',
          data: {
              "id": id,
              "_token": token,
          },
          success: function (){

              console.log("it Works");
              location.reload();
            }
          });

    }
    
  });
  </script>
<script>

  function viewDisplayIcon()
  {
    document.getElementById("DisplayIcon").style.display = "";
  }
</script>

<?php endif; ?>

<script type="text/javascript">
  $('.input-group.date').datepicker({
      todayBtn: "linked",
      autoclose: true,
      todayHighlight: true,
      format: 'mm/dd/yyyy' 
  });
</script>
</html>


<?php /**PATH D:\xampp-7.4\htdocs\test\resources\views/includes/footer.blade.php ENDPATH**/ ?>