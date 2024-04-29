<?php
  require 'config.php';

  //random character
  $permitted_chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
 
  function generate_string($input, $strength = 16) {
      $input_length = strlen($input);
      $random_string = '';
      for($i = 0; $i < $strength; $i++) {
          $random_character = $input[mt_rand(0, $input_length - 1)];
          $random_string .= $random_character;
      }
   
      return $random_string;
  }
  
  $kategori = $_GET["pCat"];
/*
  if(isset($_POST['bSimpan']))
  {
    //action simpan
	$simpan = mysqli_query($koneksi, "INSERT INTO rakitan (id, nama, cat, id_proc, id_mobo, id_ram, id_ssd, id_hdd, id_vga, id_casing, id_psu) 
                                     VALUES('$_POST[tKode]', '$_POST[tNama]', '$_GET[$kategori]', '$_POST[pProc]', '$_POST[pMobo]', '$_POST[pRam]', '$_POST[pSsd]', '$_POST[pHdd]', '$_POST[pVga]', '$_POST[pCase]', '$_POST[pPsu]')"
                                     );
  }
*/
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
      <form method="post" action="jadi.php">
        <div class="form-group">
		  
		  <a href="rakit.php">Kembali</a>
		  </br> </br>
		  
		  <label>Kategori: </label>	
          <input type="text" name="tCat" class="form-control" value="<?php echo $kategori;?>" readonly>
		  
          <label>Kode: </label>	
          <input type="text" name="tKode" class="form-control" value="<?php echo generate_string($permitted_chars, 4);?>" readonly>
		  
		  <label>Nama Rakitan: </label>
          <input type="text" name="tNama" class="form-control" value=" ">
			
          <label>Prosesor: </label>  
            
			<?php 
			$syn = "SELECT * from proc where cat = '".$kategori."'";
            $tampil = mysqli_query($koneksi, $syn);	
			
			?>
			<select class="form-control" name="pProc">
			<?php foreach ($tampil as $data) : ?>
				<option value="<?=$data['id_proc']?>"><?= $data['nama_proc'];?> | Rp. <?= number_format($data['harga'], 0, ",", ".");?></option>  
			<?php endforeach; ?>
			</select>
			<?
			$detil = "SELECT detail from proc where id_proc = '".$data."'";
            $tampil = mysqli_query($koneksi, $detil);?>
			
		  <label>Motherboard: </label>  
            
			<?php 
			$syn = "SELECT * from mobo where cat = '".$kategori."'";
            $tampil = mysqli_query($koneksi, $syn);	
			
			?>
			<select class="form-control" name="pMobo">
			<?php foreach ($tampil as $data) : ?>
				<option value="<?=$data['id_mobo']?>"> <?= $data['nama'];?> | Rp. <?= number_format($data['harga'], 0, ",", ".");?></option>  
			<?php endforeach; ?>
			</select>
			
		  <label>Ram: </label>  
            
			<?php 
			$syn = "SELECT * from ram where cat = '".$kategori."'";
            $tampil = mysqli_query($koneksi, $syn);	
			
			?>
			<select class="form-control" name="pRam">
			<?php foreach ($tampil as $data) : ?>
				<option value="<?=$data['id_ram']?>"> <?= $data['nama'];?> | Rp. <?= number_format($data['harga'], 0, ",", ".");?></option>  
			<?php endforeach; ?>
			</select>
			
		  <label>SSD: </label>  
            
			<?php 
			$syn = "SELECT * from ssd where cat = '".$kategori."'";
            $tampil = mysqli_query($koneksi, $syn);	
			
			?>
			<select class="form-control" name="pSsd">
			<?php foreach ($tampil as $data) : ?>
				<option value="<?=$data['id_ssd']?>"> <?= $data['nama'];?> | Rp. <?= number_format($data['harga'], 0, ",", ".");?></option>  
			<?php endforeach; ?>
			</select>			
			
		  <label>HDD: </label>  
            
			<?php 
			$syn = "SELECT * from hdd where cat = '".$kategori."'";
            $tampil = mysqli_query($koneksi, $syn);	
			
			?>
			<select class="form-control" name="pHdd">
			<?php foreach ($tampil as $data) : ?>
				<option value="<?=$data['id_hdd']?>"> <?= $data['nama'];?> | Rp. <?= number_format($data['harga'], 0, ",", ".");?></option>  
			<?php endforeach; ?>
			</select>			
			
		  <label>VGA: </label>  
            
			<?php 
			$syn = "SELECT * from vga where cat = '".$kategori."'";
            $tampil = mysqli_query($koneksi, $syn);	
			
			?>
			<select class="form-control" name="pVga">
			<?php foreach ($tampil as $data) : ?>
				<option value="<?=$data['id_vga']?>"> <?= $data['nama'];?> | Rp. <?= number_format($data['harga'], 0, ",", ".");?></option>  
			<?php endforeach; ?>
			</select>			
				
		  <label>PSU: </label>  
            
			<?php 
			$syn = "SELECT * from psu where cat = '".$kategori."'";
            $tampil = mysqli_query($koneksi, $syn);	
			
			?>
			<select class="form-control" name="pPsu">
			<?php foreach ($tampil as $data) : ?>
				<option value="<?=$data['id_psu']?>"> <?= $data['nama'];?> | Rp. <?= number_format($data['harga'], 0, ",", ".");?></option>  
			<?php endforeach; ?>
			</select>			
					
		  <label>Casing: </label>  
            
			<?php 
			$syn = "SELECT * from casing where cat = '".$kategori."'";
            $tampil = mysqli_query($koneksi, $syn);	
			
			?>
			<select class="form-control" name="pCase">
			<?php foreach ($tampil as $data) : ?>
				<option value="<?=$data['id_case']?>"> <?= $data['nama'];?> | Rp. <?= number_format($data['harga'], 0, ",", ".");?></option>  
			<?php endforeach; ?>
			</select>			
				
          <button type="submit" class="btn btn-success mt-5" name="bSimpan">Simpan</button>
          <button type="reset" class="btn btn-danger ml-3 mt-5" name="bReset">Reset</button>

        </div>
      </form>
    </div>

    <!--
	<div id="Harga">
      <div class="container mt-5" style="height: 15vh;">
        <div class="row">
          <div class="col-sm">
            <h3>Harga:</h3>
          </div>
          <div class="col-sm">
          <h3>Rp. </h3>
          </div>
      </div> 
    </div>
	-->
      </div>
    </div>

    <div id="Footer" class="bgbirudark" style="height: 15vh;">
      <div class="container">
        <br>
        <p class="text-center text-white" style="margin-bottom: 10px;">&copy; 2021 SimRakit - <a href="loginadmin.php">Admin</a></p>
      </div>
    </div>
    
    </body>
</html>