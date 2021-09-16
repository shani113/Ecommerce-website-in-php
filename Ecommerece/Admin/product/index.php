<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

</head>
<body class="bg-green">
      <div class="container">
      <div class="row">
      <div class="col-md-6 m-auto border-primary mt-3">
      
      <form action=insert.php  method="Post"  enctype="multipart/form-data">
<div class="mb-3">
  <p class="text-center fw-bold fs-3 text-warning">Product detail</p>
  </div>
  <div class="mb-3">
  <label class="form-label">Product Name</label>
  <input type="text" name="Pname" class="form-control" placeholder="Enter Product Name">
  </div>
  <div class="mb-3">
  <label class="form-label">Product Price</label>
  <input type="text" name="Pprice" class="form-control" placeholder="Enter Product Price">
  </div>
  <div class="mb-3">
  <label class="form-label">Add Product Image</label>
  <input type="file" name="Pimage" class="form-control" >
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
  <button name="submit" class="bg-danger fs-4 fw-bold my-3 form-control text-white">Upload</button>
  
  </form>
  </div>
      </div>
      </div>
      <div class="cotainer ">
      <div class="row">
      
      <div class="col-md-6 m-auto">
      
      <table class="table border border-warning">
  <thead class="bg-dark text-white fs-5 font-monospace text-center">
    <th>id</th>
    <th>Name</th>
    <th>Price</th>
    <th>Image</th>
    <th>Categeory</th>
    <th>Delete</th>
    <th>Update</th>
  </thead>
    <tbody>
     <?php
      include 'config.php';
      $Record=mysqli_query($con,"SELECT * FROM `tblproduct`");
      while($row=mysqli_fetch_array($Record)){
        echo"
         <tr>
         
         <td>$row[id]</td>
         <td>$row[PName]</td>
         
         <td>$row[product_price]</td>
         <td><img src='$row[product_img]'height='90px'width='200px'></td>
         <td>$row[categeory]</td>
         <td><a href='delete.php?ID=$row[id]' class='btn btn-danger'>Delete</a></td>
         <td><a href='update.php?ID=$row[id]' class='btn btn-danger'>Update</a></td>
         </tr>
        ";
       
      }
     ?>
    </tbody>
</table>
</div>
      </div>
      </div>
</body>
</html>