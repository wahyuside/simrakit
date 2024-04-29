<?php
  require 'config.php';
  
  $kat = "select * from kategori";
  
  $cat = mysqli_query($koneksi, $kat);
  

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
    <title>Rakit | SimRakit - Simulasi Rakit PC</title>
  </head>
  <body>
    <div id="Navi">
      <nav class="navbar navbar-expand-md navbar-dark bgbirudark fixed-top">
        <div class="container">
          <button class="navbar-toggler mx-auto" data-toggle="collapse" data-target="#collapse_target">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapse_target">
          <a class="navbar-brand" href="index.html"><b>SimRakit</b></a>
               <ul class="navbar-nav ml-auto">
               <li class="nav-item">
                   <a class="nav-link ml-4  active" href="rakit.php">Rakit</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link ml-4" href="panduan.php">Panduan</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link ml-4" href="hasil.php">Hasil Rakitan</a>
              </li>
              </ul>
          </div>
        </div>
      </nav>
    </div>

    <div id="Header">
      <div class="jumbotron">
          <div class="container" style="margin-top: 10vh;"></div>
          <h1 class="display-3 covertext">SimRakit</h1>
          <h3 class="covertext">Simulasi Merakit PC Idaman</h3>  
          </div>
      </div>
    </div>

    <div id="Section">
      <div class="container" style="margin-top: 50px;">
          <div id="JudulAtas" class="container" style="margin-top: 50px;">
              <h1 class="display-4 covertext">Rakit PC</h1>
          </div>
      </div>
    </div>	
	
    <div class="container">
      <form method="get" action="detailrakit.php">
        <div class="form-group">

		  <label>Kategori: </label>
		  <select class="form-control" name="pCat">
				<option>Office</option>
				<option>Multimedia</option>
				<option>Gaming</option>
		   </select>
		   
		   <button type="submit" class="btn btn-success mt-5" name="bLanjut">Lanjut</button>
		   
        </div>
      </form>
    </div> 

    <div id="Footer" class="bgbirudark" style="height: 15vh;">
      <div class="container">
        <br>
        <p class="text-center text-white" style="margin-bottom: 10px;">&copy; 2021 SimRakit - <a href="loginadmin.php">Admin</a></p>
      </div>
    </div>
    
    </body>
</html>