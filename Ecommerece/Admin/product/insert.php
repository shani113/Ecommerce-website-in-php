<?php
if(isset($_POST['submit'])){
    include 'config.php';
    $product_name=$_POST['Pname'];
    $product_price=$_POST['Pprice'];
    $product_image=$_FILES['Pimage'];
    $image_loc=$_FILES['Pimage']['tmp_name'];
    $image_name=$_FILES['Pimage']['name'];
    $img_des="Upload/".$image_name;
    move_uploaded_file($image_loc,"Upload/".$image_name);
    $product_categeory=$_POST['Pages'];
    $q=mysqli_query($con,"INSERT INTO `tblproduct` (`PName`, `product_price`, `product_img`, `categeory`) VALUES ('$product_name','$product_price','$img_des',' $product_categeory')");
    echo $q;
}


?>
<table class="table table-hover">
  <thead>
    <th>id</th>
    <th>Name</th>
    <th>Price</th>
    <th>Image</th>
    <th>Update</th>
    <th>Delete</th>
  </thead>

</table>