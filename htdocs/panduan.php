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
        <title>Panduan | SimRakit - Simulasi Rakit PC</title>
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
                    <a class="nav-link ml-4 active" href="panduan.php">Panduan</a>
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

    <div id="IsiPanduan">
        <div class="container" style="margin-top: 50px;">
            <div id="JudulAtas" class="container" style="margin-top: 50px;">
                <h1 class="display-4 covertext">Panduan</h1>
            </div>
        </div>
		<div class="container style="margin-top: 50px;">
			<p>Pengenalan komponen PC</p>
			<p><br></p>
			<p>1. Prosesor adalah otak dari komputer, yang akan secara langsung memproses perintah-perintah dan yang akan memproses dara melalui perangkat lunak komputer.</p>
			<p>2. Motherboard adalah platform yang menahan semua komponen dalam komputer. Platform ini menautkan berbagai komponen komputer serta menangani komunikasi dan transmisi di antara komponen tersebut.</p>
			<p>3. RAM adalah media yang digunakan untuk menyimpan data sementara, yang akan meningkatkan kecepatan sehingga CPU dapat mengakses data dari hard disk. Baik kapasitas maupun frekuensi memori akan mempengaruhi performa komputer.</p>
			<p>4. SSD adalah media penyimpanan pada komputer yang didalamnya menggunakan chip/solid state. SSD menghadirkan kapasitas lebih rendah, ukuran sedang, harga lebih mahal, namun lebih cepat.</p>
			<p>5. HDD adalah media penyimpanan pada komputer yang didalamnya menggunakan piringan/disk. HDD mengadirkan harga yang lebih murah dan menghadirkan kapasitas penyimpanan besar, namun secara relatif lambat dan berukuran besar.</p>
			<p>6. Kartu grafis atau VGA Card mengambil data dari komputer dan mengubahnya menjadi teks, gambar, dan warna pada tampilan monitor.</p>
			<p>7. PSU adalah alat yang berfungsi untuk menyuplai tegangan pada setiap komponen komputer yang membutuhkan aliran arus listrik dan juga untuk mengubah arus bolak-balik (AC) dari daya listrik menjadi arus searah (DC) yang dibutuhkan oleh komputer.</p>
			<p>8. Casing adalah rumah yang berbentuk kotak yang berfungsi melindungi komponen-komponen komputer diatas agar terhindar dari kerusakan.</p>
			<p><br></p>
			<p>
			Sumber:</br>
			<a href="https://id.msi.com/Landing/how-to-build-a-pc">https://id.msi.com/Landing/how-to-build-a-pc</a>
			</p>
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