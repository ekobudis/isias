        <footer class="main-footer">
            <div class="pull-right hidden-xs">
              <b>Version</b> 1.0
            </div>
            <strong>Copyright &copy; 2014-2015 <a href="http://isimpleerp.com">Sevensoft Labs</a>.</strong> All rights reserved.
        </footer>
    </div><!-- ./wrapper -->
    <!-- jQuery -->
    <!-- FastClick -->
    <script src='public/plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="public/dist/js/app.min.js" type="text/javascript"></script>
    <!-- Sparkline -->
    <script src="public/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <!-- jvectormap -->
    <script src="public/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
    <script src="public/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="public/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- ChartJS 1.0.1 -->
    <script src="public/plugins/chartjs/Chart.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(function() {
            $('#linkmenu a').click(function() {
                var url = $(this).attr('href');
                $('#content').load(url);
                return false;
            });
        });
    </script>

</body>

</html>
