


    </div>


    <!-- /.content-wrapper -->
    <?php include 'footer.php' ?>

    <!-- Control Sidebar -->


  </div>

<!-- jQuery 3 -->
<script src="/admin/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/admin/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);

  YUI().use(
    'aui-scheduler',
    function(Y) {
      var events = [
        
      ];

      var agendaView = new Y.SchedulerAgendaView();
      var dayView = new Y.SchedulerDayView();
      var eventRecorder = new Y.SchedulerEventRecorder();
      var monthView = new Y.SchedulerMonthView();
      var weekView = new Y.SchedulerWeekView();

      new Y.Scheduler(
        {
          activeView: monthView,
          boundingBox: '#myScheduler',
          eventRecorder: eventRecorder,
          items: events,
          render: true,
          views: [dayView, weekView, monthView, agendaView]
        }
      );
    }
  );

  $(function () {
            $('#datetimepicker10').datetimepicker({
                viewMode: 'years',
                format: 'MM/YYYY'
            });
        });

  $( function() {
    $( "#datepicker" ).datepicker(fadein);
    $( "#anim" ).on( "change", function() {
      $( "#datepicker" ).datepicker( "option", "showAnim", $( this ).val() );
    });
    alert("hello");
  } );
</script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="/admin/bower_components/raphael/raphael.min.js"></script>
<script src="/admin/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="/admin/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="/admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="/admin/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="/admin/bower_components/moment/min/moment.min.js"></script>
<script src="/admin/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="/admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="/admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="/admin/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/admin/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/admin/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/admin/dist/js/demo.js"></script>
  <script src="https://cdn.alloyui.com/3.0.1/aui/aui-min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>

</body>
</html>