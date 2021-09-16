<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home-page</title>
    <?php
    include 'header.php';
    ?>
</head>
<body>
 <div class="container-fluid">
 <div class="col-md-12">
 
 <div class="row">
 
<h1 class="text-warning font-monospace  text-center my-3">Mobile</h1>
<?php
$con=mysqli_connect('localhost','root','','ecommerece');

$Record=mysqli_query($con,"select * from tblproduct");
while($row=mysqli_fetch_array($Record))
{
      $check_page=$row['categeory'];
     if($check_page=='Mobile'){

     
     echo"
 
<div class='card' style='width: 18rem;'>
<form action='insertcart.php' method='POST'>
  <img src='../product/".$row['product_img']."' class='card-img-top'>
  <div class='card-body'>
    <h5 class='card-title'>$row[PName]</h5>
    <p class='card-text'>RS:$row[product_price]</p>
    <input type='hidden' name='PName' value='$row[PName]'>
    <input type='hidden' name='product_price' value='$row[product_price]'>
    <input type='number' name='Pquantity' value=' min='1' max='10'' placeholder='quantity'><br><br>
    <input type='submit' name='AddCart'class='btn btn-warning text-white w-100' value='Add to cart'>
    
 
   
  </div>
</div>
</form>
";
}
 
}
    ?>
    </div>
    </div>
    </div>
</body>
</html>