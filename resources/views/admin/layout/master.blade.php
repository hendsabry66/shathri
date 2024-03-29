<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>AdminLTE 2 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    <link rel="stylesheet" href="{{url('admin/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons 2.0.0 -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{url('admin/dist/css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{url('admin/dist/css/skins/_all-skins.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{url('admin/plugins/iCheck/flat/blue.css')}}">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{url('admin/plugins/morris/morris.css')}}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{url('admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{url('admin/plugins/datepicker/datepicker3.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{url('admin/plugins/daterangepicker/daterangepicker-bs3.css')}}">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{url('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">

    <link rel="stylesheet" href="{{url('admin/dist/fonts/fonts-fa.css')}}">
    <link rel="stylesheet" href="{{url('admin/dist/css/bootstrap-rtl.min.css')}}">
    <link rel="stylesheet" href="{{url('admin/dist/css/rtl.css')}}">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield('style')
  </head>
  <body class="skin-blue sidebar-mini">
    <div class="wrapper">

     @include('admin.layout.header')
     @include('admin.layout.nav')

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
         @yield('breadcrumb')
        </section>

        <!-- Main content -->
        <section class="content">
          @yield('content')

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      @include('admin.layout.footer')
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="{{url('admin/plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.4 -->
    <script src="{{url('admin/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="{{url('admin/plugins/morris/morris.min.js')}}"></script>
    <!-- Sparkline -->
    <script src="{{url('admin/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
    <!-- jvectormap -->
    <script src="{{url('admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
    <script src="{{url('admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{url('admin/plugins/knob/jquery.knob.js')}}"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="{{url('admin/plugins/daterangepicker/daterangepicker.js')}}"></script>
    <!-- datepicker -->
    <script src="{{url('admin/plugins/datepicker/bootstrap-datepicker.js')}}"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{{url('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
    <!-- Slimscroll -->
    <script src="{{url('admin/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{url('admin/plugins/fastclick/fastclick.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{url('admin/dist/js/app.min.js')}}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{url('admin/dist/js/pages/dashboard.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{url('admin/dist/js/demo.js')}}"></script>
    @yield('script')
  </body>
</html>
