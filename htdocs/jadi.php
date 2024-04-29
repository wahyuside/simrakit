<?php
	require 'config.php';
  
	$kode = $_POST[tKode];
	$nama = $_POST[tNama];
	$cat = $_POST[tCat];
	$proc = $_POST[pProc];
	$mobo = $_POST[pMobo];
	$ram = $_POST[pRam];
	$ssd = $_POST[pSsd];
	$hdd = $_POST[pHdd];
	$vga = $_POST[pVga];
	$case = $_POST[pCase];
	$psu = $_POST[pPsu];
	
/*	$hproc = mysqli_query($koneksi, "SELECT harga FROM proc where id_proc='$proc'");
	var_dump($hproc);
	$hmobo = mysqli_query($koneksi, "SELECT harga FROM mobo where id_proc='$mobo'");
	var_dump($hmobo);
	$harga = $hproc + $hmobo;
	var_dump($harga); */
	
	// $hp = mysqli_query($koneksi, "SELECT harga FROM proc WHEN id_proc = '$proc'");
  
	$simpan = mysqli_query($koneksi, "INSERT INTO rakitan (id, nama, cat, id_proc, id_mobo, id_ram, id_ssd, id_hdd, id_vga, id_psu, id_casing)
                                     VALUES('$kode', '$nama', '$cat', '$proc', '$mobo', '$ram', '$ssd', '$hdd', '$vga', '$psu', '$case')"
                                     );
	
	if($simpan) {
		//echo "Berhasil";
		$hasil = "Data Berhasil Disimpan";
	/*} elseif {
	 	$edit = mysqli_query($koneksi,"UPDATE rakitan set id='$kode',
	 	nama ='$nama', 
	 	cat ='$cat', 
	 	id_proc ='$proc',
	 	id_mobo ='$mobo',
	 	id_ram ='$ram',
		id_ssd ='$ssd',
		id_hdd ='$hdd',
		id_vga ='$vga',
		id_psu ='$psu',
		id_casing = '$case' WHERE id ='$kode'
		");	*/			
	} else {
		//echo "Gagal";
		$hasil = "Data Gagal Disimpan";
	}
?>
<html>

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
	
	<div id="Isi">
		<center><p>
			<?=$hasil;?> </br>
            <a>Kode rakitan anda = <b><?=$kode?></b></a></br>
			<a href="rakitan.php?id=<?=$kode?>">Lihat Hasil</a>
		</p></center>
    </div> 

    <div id="Footer" class="bgbirudark" style="height: 15vh;">
      <div class="container">
        <br>
        <p class="text-center text-white" style="margin-bottom: 10px;">&copy; 2021 SimRakit - <a href="loginadmin.php">Admin</a></p>
      </div>
    </div>
    
    </body>
</html>

