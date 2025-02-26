<?php
require_once 'key.php';

if (!isset($_GET['username'])) {
    header('Location: index.php');
    exit;
}

$username = $_GET['username'];
$user_info = null;
foreach ($users as $user) {
    if ($user['username'] == $username) {
        $user_info = $user;
        break;
    }
}

if (!$user_info) {
    header('Location: ../index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>SUMA | Dashboard</title>
  <link rel="icon" type="image/x-icon" href="../../assets/img/suma.ico" />
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../assets/plugins/fontawesome-free/css/all.min.css" />
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../../assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css" />
  <!-- iCheck -->
  <link rel="stylesheet" href="../../assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css" />
  <!-- JQVMap -->
  <link rel="stylesheet" href="../../assets/plugins/jqvmap/jqvmap.min.css" />
  <!-- Theme style -->
  <link rel="stylesheet" href="../../assets/css/adminlte.min.css" />
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css" />
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../assets/plugins/daterangepicker/daterangepicker.css" />
  <!-- summernote -->
  <link rel="stylesheet" href="../../assets/plugins/summernote/summernote-bs4.min.css" />
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <!-- Preloader -->
    <?php require_once '../utility/preloader.php'; ?>

    <!-- Navbar -->
    <?php require_once '../utility/nav.php'; ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php require_once 'sidebar.php'; ?>
    

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Dashboard</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
              </ol>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
    <?php require_once 'content.php'; ?>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- footer -->
    <?php require_once '../utility/footer.php'; ?>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="../../assets/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="../../assets/plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge("uibutton", $.ui.button);
  </script>
  <!-- Bootstrap 4 -->
  <script src="../../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="../../assets/plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="../../assets/plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="../../assets/plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="../../assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="../../assets/plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="../../assets/plugins/moment/moment.min.js"></script>
  <script src="../../assets/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="../../assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="../../assets/plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="../../assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../assets/js/adminlte.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../../assets/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
  <script src="../../assets/js/pages/dashboard.js"></script>
  <script src="../../assets/js/suma/item-dashboard.js"></script>
</body>

</html>