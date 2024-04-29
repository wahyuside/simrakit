<?php
  require 'config.php';
  
  session_start();
  if(!$_SESSION['username']){
    header("location:loginadmin.php");
  }

  //action button simpan
  if(isset($_POST['bSimpan']))
  {
    //action saat edit
    if($_GET['hal'] == "edit") {
      $edit = mysqli_query($koneksi,"UPDATE proc set id_proc='".$_POST['tiD']."',
      nama_proc = '".$_POST['tNama']."', 
      detil = '".$_POST['tDetil']."',
      cat = '".$_POST['tCat']."',
      harga = '".$_POST['tHarga']."' WHERE id_proc = '".$_GET['id']."'
      ");
    }
    //action simpan biasa
    else { $simpan = mysqli_query($koneksi, "INSERT INTO proc (id_proc, nama_proc, detil, cat, harga) 
                                     VALUES('$_POST[tiD]', '$_POST[tNama]', '$_POST[tDetil]', '$_POST[tCat]', '$_POST[tHarga]')"
                                     );}
  }
  
  //action button edit & delete
  if(isset($_GET['hal'])) {
    //action button edit
    if ($_GET['hal'] =='edit') {
      $tampil = mysqli_query($koneksi, "SELECT * FROM proc WHERE id_proc = '$_GET[id]'");
      $data = mysqli_fetch_array($tampil);
      if($data) {
        $vId = $data['id_proc'];
        $vNama = $data['nama_proc'];
        $vMerk = $data['detil'];
        $vCat = $data['cat'];
		$vDetil = $data['detil'];
        $vHarga = $data['harga'];
      }
    } 
    //action hapus
	else{
      $hapus = mysqli_query($koneksi, "DELETE FROM proc WHERE id_proc = '$_GET[id]'");
    }
  }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin - CPU</title>
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
            <li><a href="dashboard.php"></i> Dashboard</a></li>
            <li class="active"><a href="dashboard-cpu.php"></i>Prosesor</a></li>
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
            <h1>Prosesor</h1>
          </div>

          <div class="col-lg-12">
            <div class="card" id="Form">
                <div class="card-header bg-info">
                  <h3>Edit Data</h3>
                </div>
                <div class="card-body">
                  <form method="post" action="">
                    <div class="form-group">
                      <label>Id: </label>
                      <input type="text" name="tiD" value="<?=@$vId?>" class="form-control" placeholder="Masukkan Id" required>
                    </div>
                    <div class="form-group">
                      <label>Nama: </label>
                      <input type="text" name="tNama" value="<?=@$vNama?>" class="form-control" placeholder="Masukkan Nama" required>
                    </div>
                    <div class="form-group">
                      <label>Kategori: (Office, Multimedia, Gaming)</label>
                      <input type="text" name="tCat" value="<?=@$vCat?>" class="form-control" placeholder="Masukkan Kategori" required>
                    </div>
					<div class="form-group">
                      <label>Detil: </label>
                      <input type="text" name="tDetil" value="<?=@$vDetil?>" class="form-control" placeholder="Masukkan Detil">
                    </div>
                    <div class="form-group">
                      <label>Harga: </label>
                      <input type="text" name="tHarga" value="<?=@$vHarga?>" class="form-control" placeholder="Masukkan Harga" required>
                    </div>
                    <button type="submit" class="btn btn-success" name="bSimpan">Simpan</button>
                    <button type="reset" class="btn btn-danger" name="bReset">Kosongkan</button>
                 </form>
                </div>
            </div>

            <div class="card mt-3" id="Table">
              <div class="card-header bg-info">
                <h3>Data</h3>
              </div>
              <div class="card-body">
                <table class="table table-bordered">
                  <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Kategori</th>
					<th>Detil</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                  </tr>
                  <?php
                    $tampil = mysqli_query($koneksi, "SELECT * from proc order by id_proc desc");
                    while($data = mysqli_fetch_array($tampil)) :
                  ?>
                  <tr>
                    <td><?=$data['id_proc']?></td>
                    <td><?=$data['nama_proc']?></td>
                    <td><?=$data['cat']?></td>
					<td><?=$data['detil']?></td>
                    <td><?=$data['harga']?></td>
                    <td>
                      <a href="dashboard-cpu.php?hal=edit&id=<?=$data['id_proc']?>" class="btn btn-warning">Edit</a>
                      <a href="dashboard-cpu.php?hal=hapus&id=<?=$data['id_proc']?>"
                              onclick="return confirm('Apakah yakin ingin menghapus data ini?')" class="btn btn-danger">Hapus</a>
                    </td>
                  </tr>
                    <?php endwhile; ?>
                </table>
              </div>
            </div>
          </div>

        </div><!-- /.row -->

      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

  </body>
</html>