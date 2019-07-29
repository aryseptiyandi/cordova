<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $nmpemesan=$_POST['nmpemesan'];
 $tpkamar=$_POST['tpkamar'];
 $durasi=$_POST['durasi'];
 $harga=$_POST['harga'];
 $q=mysqli_query($con,"INSERT INTO `pemesanan` (`nmpemesan`,`tpkamar`,`durasi`,`harga`) VALUES ('$nmpemesan','$tpkamar','$durasi','$harga')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>
