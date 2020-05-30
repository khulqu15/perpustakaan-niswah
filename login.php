<?php 

          include "include/koneksi.php";
          
         

          session_start();
          
     
        
?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Halaman Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href=""><b>Perpustakaan</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Masukkan Username and Password</p>

    <form  method="POST">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="username" placeholder="Username">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="pass" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        
     
        <div class="col-xs-4">
          <button type="submit" name="login" class="btn btn-primary btn-block btn-flat">Log in</button>
        </div>
     
      </div>
    </form>

 
</div>

<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>

<?php 

if (isset($_POST ['login'])) {
	$username = $_POST ['username'];
	$pass= $_POST['pass'];
   
	$sql = $koneksi-> query ("select * from tb_user where username='$username' and password= '$pass'");

	$data = $sql-> fetch_assoc ();

	$ketemu = $sql->num_rows;

	if ($ketemu >=1) {

		session_start();

	  if ($data ['level'] == "admin") {
	  	$_SESSION['admin'] = $data ['id'];
	  	header("location:index.php");

	  }
	  else if ($data ['level'] == "user") {
	  	$_SESSION['user'] = $data ['id'];
	  	header("location:index.php");
	}
  }else{
  	?>

  	<script type="text/javascript">
  		
  		alert("Login Gagal Username dan Password Salah...Silahkan Ulangi Kembali");
  		
  	</script>


  	<?php
  }
}


 ?>