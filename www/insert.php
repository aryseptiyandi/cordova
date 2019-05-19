<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $tpkamar=$_POST['tpkamar'];
 $durasi=$_POST['durasi'];
 $harga=$_POST['harga'];
 $q=mysqli_query($con,"INSERT INTO `pemesanan` (`tpkamar`,`durasi`,`harga`) VALUES ('$tpkamar','$durasi','$harga')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>