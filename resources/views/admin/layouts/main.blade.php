<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>AdminLTE 3 | Dashboard 3</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('admin/css/plugins/fontawesome-free/all.min.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">

  <!-- IonIcons -->
  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('admin/css/adminlte.rtl.min.css') }}">

  <link rel="stylesheet" href="">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini rtl">
<div class="wrapper">
  <!-- Navbar -->
 @include('admin.layouts.includes.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('admin.layouts.includes.sidebar')
  <!-- Content Wrapper. Contains page content -->
  
  @yield('content')
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  @include('admin.layouts.includes.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('admin/js/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('admin/js/bootstrap.bundle.min.js') }}"></script>

<!-- AdminLTE -->
<script src="{{ asset('admin/js/adminlte.js') }}"></script>

<!-- DataTables -->
<script src="{{ asset('js/plugins/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/plugins/dataTables.bootstrap4.min.js') }}"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="{{ asset('admin/js/plugins/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('admin/js/dist/js/demo.js') }}"></script>
<script src="{{ asset('admin/js/dist/js/pages/dashboard3.js') }}"></script>

</body>
</html>
