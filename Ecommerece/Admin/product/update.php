<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

</head>
<?php
  
   $id=isset($_GET['ID']) ? $_GET['ID'] : 0;
  
   include 'config.php';
   $record=mysqli_query($con,"SELECT * FROM `tblproduct` WHERE id= $id");
   $q="SELECT * FROM `tblproduct` WHERE id=$id";
   echo  $q;
   $data=mysqli_fetch_array($record);
   //SELECT * FROM `tblproduct` WHERE id=$id
   
?>

<body class="bg-green">
      <div class="container">
      <div class="row">
      <div class="col-md-6 m-auto border-primary mt-3">
      
      <form action="update.php"  method="Post"  enctype="multipart/form-data">
<div class="mb-3">
  <p class="text-center fw-bold fs-3 text-warning">Product Update</p>
  </div>
  <div class="mb-3">
  <label class="form-label">Product Name</label>
  <input type="text" value="<?php echo $data['PName']?>" name="Pname" class="form-control" placeholder="Enter Product Name">
  </div>
  <div class="mb-3">
  <label class="form-label">Product Price</label>
  <input type="text"value="<?php echo $data['product_price']?>" name="Pprice" class="form-control" placeholder="Enter Product Price">
  </div>
  <div class="mb-3">
  <label class="form-label">Add Product Image</label>
  <input type="file" name="Pimage" class="form-control" >
  <img src="<?php echo $data['product_img']?>" alt="" style="height: 100px;">
  </div>
  <div class="mb-3">
  <label class="form-label">select page Categeory</label>
  <select class="form-select" name="Pages">
  <option value="Home">Home</option>
  <option value="Laptop">Laptop</option>
  <option value="bag">Bag</option>
  <option value="Mobile">Mobile</option>
</select>
  </div>
    <input type="hidden" name="id" value="<?php echo $data['id']?>">
  <button  name="update" class="bg-danger fs-4 fw-bold my-3 form-control text-white">Update</button>
  
  </form>
  </div>
      </div>
      </div>
      <?php
      print_r(isset($_POST));
      if(isset($_POST['update'])){
          $id=$_POST['id'];
      
      $product_name=$_POST['Pname'];
      $product_price=$_POST['Pprice'];
      $product_image=$_FILES['Pimage'];
      $image_loc=$_FILES['Pimage']['tmp_name'];
      $image_name=$_FILES['Pimage']['name'];
      $img_des="Upload/".$image_name;
      move_uploaded_file($image_loc,"Upload/".$image_name);
      $product_categeory=$_POST['Pages'];
      include 'config.php';
      mysqli_query($con,"UPDATE `tblproduct` SET `PName`='$product_name',`product_price`='$product_price',`product_img`='$img_des',`categeory`='$product_categeory' WHERE  id=$id");
   
    
       
        header("location:index.php");

        }
        
      ?>

