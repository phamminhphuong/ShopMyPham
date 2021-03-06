<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <base href="{{asset('')}}">
  <link rel="stylesheet" href="style_admin/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="style_admin/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="style_admin/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="style_admin/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="style_admin/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="style_admin/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="style_admin/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="style_admin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="style_admin/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="style_admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  {{-- fontanwesome --}}
  <link rel="stylesheet" href="fontAnwesome/css/fontawesome-all.css">
  <link rel="stylesheet" href="fontAnwesome/css/fontawesome-all.min.css">
  <link rel="stylesheet" href="fontAnwesome/css/fontawesome.css">
  <link rel="stylesheet" href="fontAnwesome/css/fontawesome.min.css">
  <link href="style_admin/bower_components/jquery-ui/themes/base/jquery-ui.min.css" rel="stylesheet" />


  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  @include('admin.layout.header')
  @include('admin.layout.menu')
  <div class="content-wrapper">
    @yield('content')
  </div>
    @include('admin.layout.footer')
  <div class="control-sidebar-bg"></div>
</div>

<script src="style_admin/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="style_admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="style_admin/bower_components/raphael/raphael.min.js"></script>
<script src="style_admin/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="style_admin/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="style_admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="style_admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="style_admin/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="style_admin/bower_components/moment/min/moment.min.js"></script>
<script src="style_admin/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="style_admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="style_admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="style_admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="style_admin/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="style_admin/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="style_admin/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="style_admin/dist/js/demo.js"></script>
<script src="style_admin/bower_components/ckeditor/ckeditor.js"></script>
<script src="style_admin/bower_components/jquery-migrate/jquery-migrate.min.js"></script>
<script src="style_admin/bower_components/jquery-ui/jquery-ui.min.js"></script>
<script src="style_admin/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="style_admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
@yield('script') 
</body>
</html>
