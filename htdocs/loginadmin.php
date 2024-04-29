<?php
	session_start();

	require 'config.php';
	if(isset($_POST["login"])) {
    $username = $_POST["uname"];
    $password = $_POST["pass"];
  
    $result = mysqli_query($koneksi, "SELECT * FROM admin WHERE username = '$username'");
	
    if(mysqli_num_rows($result)>0) {
		  $user = mysqli_query($koneksi,"select * from admin where username='$username' and password='$password'");
		  if(mysqli_num_rows($user)>0) {
			$_SESSION['username']=$username;

			header("location:dashboard.php");
		  } else {
			header("location:loginadmin.php");  
		  }
    }
  }
  
	if(isset($_POST["back"])) {
		header("Location:index.html"); 
  }
?>

<!DOCTYPE html>
<html>
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <!--JQuery JavaScript-->
      <script src="js/jquery-latest.min.js"></script>
      <!--Bootstrap JavaScript-->
      <script src="js/bootstrap.min.js"></script>
      <!--Bootstrap CSS-->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!--Bootstrap Grid CSS-->
      <link rel="stylesheet" href="css/bootstrap-grid.min.css">
      <!--User style CSS-->
      <link rel="stylesheet" href="style.css">
      <title>Login - Simrakit Admin</title>
  </head>
  <body>
    <div class="container mt-5">
      <div class="card bg-light">
        <div class="container mt-5 mb-5">
          <form action="" method="post">
            <h3 class="text-center mb-3">Login Admin Simrakit</h3>
            <div class="form-group">
              <input type="text" class="form-control" name="uname" id="uname" placeholder="Username">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" name="pass" id="pass" placeholder="Password">
            </div>
              <button type="submit" class="btn btn-block btn-success" name="login" id="login">LOGIN</button>
			  <button type="submit" class="btn btn-block btn-secondary" name="back" id="back">KEMBALI KE SIMRAKIT</button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>