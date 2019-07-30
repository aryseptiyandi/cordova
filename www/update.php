<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $Id=$_POST['id'];    
 $nmpemesan=$_POST['nmpemesan'];
 $no_ktp=$_POST['no_ktp'];
 $tpkamar=$_POST['tpkamar'];
 $durasi=$_POST['durasi'];
 $harga=$_POST['harga'];
 $q=mysqli_query($con,"UPDATE `pemesanan` SET `nmpemesan`='$nmpemesan',`no_ktp`='$no_ktp',`tpkamar`='$tpkamar',`durasi`='$durasi',`harga`='$harga' where `id`='$Id'");
 if($q)
 echo "sukses";
 else
 echo "error";
 }
 ?>
