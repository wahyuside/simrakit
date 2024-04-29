<?php
  require 'config.php';
  
  $id = $_GET["id"];
  
  //untuk akses tabel rakit
  $tbr = mysqli_query($koneksi, "SELECT * FROM rakitan WHERE id = '$id'");
  $datar = mysqli_fetch_array($tbr);
  //a
  $proc = $datar['id_proc'];
  $mobo = $datar['id_mobo'];
  $ram = $datar['id_ram'];
  $ssd = $datar['id_ssd'];
  $hdd = $datar['id_hdd'];
  $vga = $datar['id_vga'];
  $psu = $datar['id_psu'];
  $cas = $datar['id_casing'];
  
  //untuk akses tabel proc
  $tbp = mysqli_query($koneksi, "SELECT * FROM proc WHERE id_proc = '$proc'");
  $datap = mysqli_fetch_array($tbp);
  //untuk akses tabel mobo
  $tbm = mysqli_query($koneksi, "SELECT * FROM mobo WHERE id_mobo = '$mobo'");
  $datam = mysqli_fetch_array($tbm);
  //untuk akses tabel ram
  $tbram = mysqli_query($koneksi, "SELECT * FROM ram WHERE id_ram = '$ram'");
  $dataram = mysqli_fetch_array($tbram);
  //untuk akses tabel ssd
  $tbs = mysqli_query($koneksi, "SELECT * FROM ssd WHERE id_ssd = '$ssd'");
  $datas = mysqli_fetch_array($tbs);
  //untuk akses tabel hdd
  $tbh = mysqli_query($koneksi, "SELECT * FROM hdd WHERE id_hdd = '$hdd'");
  $datah = mysqli_fetch_array($tbh);
  //untuk akses tabel vga
  $tbv = mysqli_query($koneksi, "SELECT * FROM vga WHERE id_vga = '$vga'");
  $datav = mysqli_fetch_array($tbv);
  //untuk akses tabel vga
  $tbu = mysqli_query($koneksi, "SELECT * FROM psu WHERE id_psu = '$psu'");
  $datau = mysqli_fetch_array($tbu);
  //untuk akses tabel casing
  $tbc = mysqli_query($koneksi, "SELECT * FROM casing WHERE id_case = '$cas'");
  $datac = mysqli_fetch_array($tbc);
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
        <title>Hasil Rakitan | SimRakit - Simulasi Rakit PC</title>
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
                    <a class="nav-link ml-4" href="rakit.php">Rakit</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ml-4" href="panduan.php">Panduan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ml-4 active" href="hasil.php">Hasil Rakitan</a>
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

    <div di="Section">
        <div class="container" style="margin-top: 50px;">
            <div id="JudulAtas" class="container" style="margin-top: 50px;">
                <h1 class="display-4 covertext">Hasil Rakitan</h1>
            </div>
        </div>
    </div>

	<div id="Isi" class="container">
		<table class="table">
			<tr>
				<td>Kode: </td>
				<td><?=$datar['id']?></td>
			</tr>
			<tr>
				<td>Nama Rakitan: </td>
				<td><?=$datar['nama']?></td>
			</tr>
			<tr>
				<td>Kategori: </td>
				<td><?=$datar['cat']?></td>
				<td></td>
			</tr>
				<td>Detail:</td>
			<tr>
			</tr>
		</table>
		</br>
		<table class="table">		
			<tr>
				<td>Prosesor: </td>
				<td><?=$datap['nama_proc']?></td>
				<td>Harga: </td>
				<td>Rp. <?= number_format($hargap = $datap['harga'], 0, ",", ".")?></td>
				<td><a href="<?=$datap['detil']?>" target="_blank">Detail<a></td>
			</tr>
			<tr>
				<td>Motherboard: </td>
				<td><?=$datam['nama']?></td>
				<td>Harga: </td>
				<td>Rp. <?= number_format($hargam = $datam['harga'], 0, ",", ".")?></td>
				<td><a href="<?=$datam['detail']?>" target="_blank">Detail<a></td>
			</tr>
			<tr>
				<td>RAM: </td>
				<td><?=$dataram['nama']?></td>
				<td>Harga: </td>
				<td>Rp. <?= number_format($hargaram = $dataram['harga'], 0, ",", ".")?></td>
				<td><a href="<?=$dataram['detail']?>" target="_blank">Detail<a></td>
			</tr>
			<tr>
				<td>SSD: </td>
				<td><?=$datas['nama']?></td>
				<td>Harga: </td>
				<td>Rp. <?= number_format($hargas = $datas['harga'], 0, ",", ".")?></td>
				<td><a href="<?=$datas['detail']?>" target="_blank">Detail<a></td>
			</tr>
			<tr>
				<td>HDD: </td>
				<td><?=$datah['nama']?></td>
				<td>Harga: </td>
				<td>Rp. <?= number_format($hargah = $datah['harga'], 0, ",", ".")?></td>
				<td><a href="<?=$datah['detail']?>" target="_blank">Detail<a></td>
			</tr>
			<tr>
				<td>VGA: </td>
				<td><?=$datav['nama']?></td>
				<td>Harga: </td>
				<td>Rp. <?= number_format($hargav = $datav['harga'], 0, ",", ".")?></td>
				<td><a href="<?=$datav['detail']?>" target="_blank">Detail<a></td>
			</tr>
			<tr>
				<td>PSU: </td>
				<td><?=$datau['nama']?></td>
				<td>Harga: </td>
				<td>Rp. <?= number_format($hargau = $datau['harga'], 0, ",", ".")?></td>
				<td><a href="<?=$datau['detail']?>" target="_blank">Detail<a></td>
			</tr>
			<tr>
				<td>Casing: </td>
				<td><?=$datac['nama']?></td>
				<td>Harga: </td>
				<td>Rp. <?= number_format($hargac = $datac['harga'], 0, ",", ".")?></td>
				<td><a href="<?=$datac['detail']?>" target="_blank">Detail<a></td>
			</tr>
		</table>
		
		<center>
            
            <h3>Total: Rp. <?= number_format($total = $hargap + $hargam + $hargaram + $hargas + $hargah + $hargav + $hargau + $hargac, 0, ",", ".");?></h3>
            </br>
            <a>Harga yang ditampilkan hanya sebatas patokan, harga asli mungkin bisa berbeda tergantung kondisi pasar</a>
            </br>
            </br>
        </center>
	</div>

    <div id="Footer" class="bgbirudark" style="height: 15vh;">
      <div class="container">
        <br>
        <p class="text-center text-white" style="margin-bottom: 10px;">&copy; 2021 SimRakit - <a href="loginadmin.php">Admin</a></p>
      </div>
    </div>
    
    </body>
</html>