<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $Id=$_POST['Id'];    
 $tpkamar=$_POST['tpkamar'];
 $durasi=$_POST['durasi'];
 $harga=$_POST['harga'];
 $q=mysqli_query($con,"UPDATE `pemesanan` SET `tpkamar`='$tpkamar',`durasi`='$durasi',`harga`='$harga' where `Id`='$Id'");
 if($q)
 echo "sukses";
 else
 echo "error";
 }
 ?>