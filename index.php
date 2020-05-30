<?php 

     error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
     
     include "include/koneksi.php";

     session_start();

     include "function.php";

     if ($_SESSION['admin'] || ($_SESSION['user']) ) {
    

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Perpustakaan</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="dist/css/fontawesome.min.css">
  <link rel="stylesheet" href="dist/css/all.min.css">
  <link rel="stylesheet" href="dist/css/style.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <a href="index2.html" class="logo pt-1">
      <span class="logo-lg"> <i class="fas fa-book-open"></i> <b>PERPUSTAKAAN</b></span>
    </a>
    <nav class="navbar navbar-static-top">

       <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="search-menu">
            <div class="form-group form-group-ynav">
              <div class="row">
                <div class="col-xs-8">
                  <input type="text" name="search" id="search" class="form-control form-control-search" placeholder="Cari sesuatu.." aria-describedby="helpId">
                </div>
                <div class="col-xs-4">
                  <button class="btn btn-light"><i class="fas fa-search"></i></button>
                </div>
              </div>
            </div>
          </li>
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="4.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><b>ADMIN</b></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="4.png" class="img-circle" alt="User Image">
                <p>
                   <b> ADMIN </b>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
         
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
 
  <?php include "include/menu.php";?>

    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <?php include "include/isi.php";?>
    </section>
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
  </footer>
    

               
        
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<script src="dist/js/fontawesome.min.js"></script>
<script src="dist/js/all.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
</body>
</html>
<?php
 
 }else {
  header("location:login.php");
 }

?>