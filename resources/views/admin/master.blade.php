<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <!-- Meta, title, CSS, favicons, etc. -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="icon" href="images/favicon.ico" type="image/ico" />
      <title>Gentelella Alela! | </title>
      <!-- Bootstrap -->
      <link href="{{ asset('backend/assets/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
      <!-- Font Awesome -->
      <link href="{{ asset('backend/assets/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
      <!-- NProgress -->
      <link href="{{ asset('backend/assets/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
      <!-- iCheck -->
      <link href="{{ asset('backend/assets/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
      <!-- bootstrap-progressbar -->
      <link href="{{ asset('backend/assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
      <!-- Switchery -->
      <link href="{{ asset('backend/assets/vendors/switchery/dist/switchery.min.css')}}" rel="stylesheet">
      <!-- bootstrap-daterangepicker -->
      <link href="{{ asset('backend/assets/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
      <!-- Datatables -->
      <link href="{{ asset('backend/assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
      <link href="{{ asset('backend/assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
      <link href="{{ asset('backend/assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
      <link href="{{ asset('backend/assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
      <link href="{{ asset('backend/assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">
      <!-- Custom Theme Style -->
      <link href="{{ asset('backend/assets/build/css/custom.min.css')}}" rel="stylesheet">
   </head>
   <body class="nav-md">
      <div class="container body">
         <div class="main_container">
            <!-- top sidebar -->
            @include('admin.body.sidebar')
            <!-- /top sidebar -->
            <!-- top navigation -->
            @include('admin.body.navbar')
            <!-- /top navigation -->
            <!-- page content -->
            <div class="right_col" role="main">
               <!-- top tiles -->
               @yield('content')
            </div>
            <!-- /page content -->
            <!-- footer content -->
            @include('admin.body.footer')
            <!-- /footer content -->
         </div>
      </div>
      <!-- jQuery -->
      <script src="{{ asset('backend/assets/vendors/jquery/dist/jquery.min.js')}}"></script>
      <!-- Bootstrap -->
      <script src="{{ asset('backend/assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
      <!-- FastClick -->
      <script src="{{ asset('backend/assets/vendors/fastclick/lib/fastclick.js')}}"></script>
      <!-- NProgress -->
      <script src="{{ asset('backend/assets/vendors/nprogress/nprogress.js')}}"></script>
      <!-- Chart.js -->
      <script src="{{ asset('backend/assets/vendors/Chart.js/dist/Chart.min.js')}}"></script>
      <!-- gauge.js -->
      <script src="{{ asset('backend/assets/vendors/gauge.js/dist/gauge.min.js')}}"></script>
      <!-- bootstrap-progressbar -->
      <script src="{{ asset('backend/assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
      <!-- iCheck -->
      <script src="{{ asset('backend/assets/vendors/iCheck/icheck.min.js')}}"></script>
      <!-- Skycons -->
      <script src="{{ asset('backend/assets/vendors/skycons/skycons.js')}}"></script>
      <!-- Flot -->
      <script src="{{ asset('backend/assets/vendors/Flot/jquery.flot.js')}}"></script>
      <script src="{{ asset('backend/assets/vendors/Flot/jquery.flot.pie.js')}}"></script>
      <script src="{{ asset('backend/assets/vendors/Flot/jquery.flot.time.js')}}"></script>
      <script src="{{ asset('backend/assets/vendors/Flot/jquery.flot.stack.js')}}"></script>
      <script src="{{ asset('backend/assets/vendors/Flot/jquery.flot.resize.js')}}"></script>
      <!-- Flot plugins -->
      <script src="{{ asset('backend/assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
      <script src="{{ asset('backend/assets/vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
      <script src="{{ asset('backend/assets/vendors/flot.curvedlines/curvedLines.js')}}"></script>
      <!-- DateJS -->
      <script src="{{ asset('backend/assets/vendors/DateJS/build/date.js')}}"></script>
	   <!-- Switchery -->
	   <script src="{{ asset('backend/assets/vendors/switchery/dist/switchery.min.js')}}"></script>

      <!-- ECharts -->
      <script src="{{ asset('backend/assets/vendors/echarts/dist/echarts.min.js')}}"></script>
      <script src="{{ asset('backend/assets/vendors/echarts/map/js/world.js')}}"></script>

      <!-- bootstrap-daterangepicker -->
      <script src="{{ asset('backend/assets/vendors/moment/min/moment.min.js')}}"></script>
      <script src="{{ asset('backend/assets/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
      <script src="{{ asset('backend/assets/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
      <script src="{{ asset('backend/assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
      <script src="{{ asset('backend/assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
      <script src="{{ asset('backend/assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
      <script src="{{ asset('backend/assets/vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
      <script src="{{ asset('backend/assets/vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
      <script src="{{ asset('backend/assets/vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
      <script src="{{ asset('backend/assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
      <script src="{{ asset('backend/assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
      <script src="{{ asset('backend/assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
      <script src="{{ asset('backend/assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
      <script src="{{ asset('backend/assets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>
      <script src="{{ asset('backend/assets/vendors/jszip/dist/jszip.min.js')}}"></script>
      <script src="{{ asset('backend/assets/vendors/pdfmake/build/pdfmake.min.js')}}"></script>
      <script src="{{ asset('backend/assets/vendors/pdfmake/build/vfs_fonts.j')}}s"></script>
      <!-- Custom Theme Scripts -->
      <script src="{{ asset('backend/assets/build/js/custom.min.js')}}"></script>
   </body>
</html>
