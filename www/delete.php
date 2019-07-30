<?php
 include "db.php";
 if(isset($_GET['id']))
 {
 $Id=$_GET['id'];
 $q=mysqli_query($con,"delete from `pemesanan` where `id`='$Id'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>
