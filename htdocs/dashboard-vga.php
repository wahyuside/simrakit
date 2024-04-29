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
      $edit = mysqli_query($koneksi,"UPDATE vga set id_vga='".$_POST['tiD']."',
      nama = '".$_POST['tNama']."', 
	  cat = '".$_POST['tCat']."',
	  detail = '".$_POST['tDetail']."',
      harga = '".$_POST['tHarga']."' WHERE id_vga = '".$_GET['id']."'
      ");
    }
    //action simpan biasa
    else { $simpan = mysqli_query($koneksi, "INSERT INTO vga (id_vga, nama, cat, detail, harga) 
                                     VALUES('$_POST[tiD]', '$_POST[tNama]', '$_POST[tCat]', '$_POST[tDetail]', '$_POST[tHarga]')"
                                     );}
  }
  
  //action button edit & delete
  if(isset($_GET['hal'])) {
    //action button edit
    if ($_GET['hal'] =='edit') {
      $tampil = mysqli_query($koneksi, "SELECT * FROM vga WHERE id_vga = '$_GET[id]'");
      $data = mysqli_fetch_array($tampil);
      if($data) {
        $vId = $data['id_vga'];
        $vNama = $data['nama'];
		$vCat = $data['cat'];
		$vDetail = $data['detail'];
        $vHarga = $data['harga'];
      }
    } 
    //action hapus
	else{
      $hapus = mysqli_query($koneksi, "DELETE FROM vga WHERE id_vga = '$_GET[id]'");
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
    <title>Admin - VGA</title>
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
            <li><a href="dashboard-cpu.php"></i>Prosesor</a></li>
            <li><a href="dashboard-mobo.php"></i>Motherboard</a></li>
			<li><a href="dashboard-ram.php"></i> RAM</a></li>
			<li><a href="dashboard-ssd.php"></i> SSD</a></li>
			<li><a href="dashboard-hdd.php"></i> HDD</a></li>
			<li class="active"><a href="dashboard-vga.php"></i> VGA</a></li>
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
            <h1>VGA</h1>
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
                      <label>Detail: </label>
                      <input type="text" name="tDetail" value="<?=@$vDetail?>" class="form-control" placeholder="Masukkan Detail">
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
					<th>Detail</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                  </tr>
                  <?php
                    $tampil = mysqli_query($koneksi, "SELECT * from vga order by id_vga desc");
                    while($data = mysqli_fetch_array($tampil)) :
                  ?>
                  <tr>
                    <td><?=$data['id_vga']?></td>
                    <td><?=$data['nama']?></td>
                    <td><?=$data['cat']?></td>
					<td><?=$data['detail']?></td>
                    <td><?=$data['harga']?></td>
                    <td>
                      <a href="dashboard-vga.php?hal=edit&id=<?=$data['id_vga']?>" class="btn btn-warning">Edit</a>
                      <a href="dashboard-vga.php?hal=hapus&id=<?=$data['id_vga']?>"
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