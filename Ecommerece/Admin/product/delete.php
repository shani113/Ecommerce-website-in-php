<?php
   $id=isset($_GET['ID']) ? $_GET['ID'] : 0;
 include 'config.php';
 mysqli_query($con,"DELETE FROM `tblproduct` WHERE id=$id");
  // $q="DELETE FROM `tblproduct` WHERE id=$id";
  // echo $q;

 header("location:index.php");
     
?>
