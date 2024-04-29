<?php
  //koneksi database
  $Host = " ";
  $Username = " ";
  $Password = " ";
  $Name = " ";

  $koneksi = mysqli_connect($Host, $Username, $Password, $Name) or die(mysqli_error($koneksi));
?>