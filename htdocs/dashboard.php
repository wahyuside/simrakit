<?php
  session_start();
  if(!$_SESSION['username']){
    header("location:loginadmin.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin</title>
    <!-- JavaScript -->
    <script src="admin/js/jquery-1.10.2.js"></script>
    <script src="admin/js/bootstrap.js"></script>
    <!-- Bootstrap CSS -->
    <link href="admin/css/bootstrap.min.css" rel="stylesheet">
    <!-- Add custom CSS here -->
    <link href="admin/css/sb-admin.css" rel="stylesheet">
  </head>

  <body>
    <div id="wrapper">
      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="dashboard.php">Admin</a>
          <a class="navbar-brand ml-3" href="index.html">SimRakit</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li class="active"><a href="dashboard.php"></i> Dashboard</a></li>
            <li><a href="dashboard-cpu.php"></i>Prosesor</a></li>
			<li><a href="dashboard-mobo.php"></i> Motherboard</a></li>
			<li><a href="dashboard-ram.php"></i> RAM</a></li>
			<li><a href="dashboard-ssd.php"></i> SSD</a></li>
			<li><a href="dashboard-hdd.php"></i> HDD</a></li>
			<li><a href="dashboard-vga.php"></i> VGA</a></li>
			<li><a href="dashboard-psu.php"></i> PSU</a></li>
			<li><a href="dashboard-casing.php"></i> Casing</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right navbar-user">
            <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"></i> Admin <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="logout.php"></i> Log Out</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>

      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Dashboard</h1>
          </div>
        </div><!-- /.row -->

      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

  </body>
</html>