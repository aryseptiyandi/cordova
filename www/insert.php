<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $nmpemesan=$_POST['nmpemesan'];
 $no_ktp=$_POST['no_ktp'];
 $tpkamar=$_POST['tpkamar'];
 $durasi=$_POST['durasi'];
 $harga=$_POST['harga'];
 $q=mysqli_query($con,"INSERT INTO `pemesanan` (`nmpemesan`,`no_ktp`,`tpkamar`,`durasi`,`harga`) VALUES ('$nmpemesan','$no_ktp','$tpkamar','$durasi','$harga')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>
