<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Cart</title>
</head>
<body>
  <?php
  include 'header.php';
  ?>
    <div class="container">
    <div class="row">
     <div class="col-lg-12 text-center bg-light mb-5 rounded">
     <h1 class="text-warning">My Cart</h1>
     </div>
    </div>
    </div>
    <div class="container-fluid">
    <div class="row justify-content-around">
    <div class="col sm-12 col-md-6 col-lg-9">
    <table class="table table-borderd text-center">
    <thead class="bg-danger text-white fs-5">
     <th> serial No  </th>
     <th>Product name</th>
     <th>product Price</th>
     <th>product quantity</th>
     
     
     
     
    
     <th>Total Price</th>
     <th>Update</th>
     <th>Delete</th>

    </thead>
    <tbody>
    <?php
    
    
    $total=0;
    $ptotal=0;
    $i=0;
    if(isset($_SESSION['cart'])){
      foreach($_SESSION['cart'] as $key=> $value){
        $total= $value['productprice']* $value['productquan'];
        $ptotal+= $value['productprice']* $value['productquan'];
        $i=$key+1;
        echo "
        <form action='insertcart.php' method='POST'>
        
         <tr>
         <td>$i</td>
         <td><input type='hidden' name='PName' value='$value[productname]'>$value[productname]</td>
         <td><input type='hidden' name='product_price'value='$value[productprice]'> $value[productprice]</td>
         <td><input type='text' name='Pquantity'value='$value[productquan]'>$value[productquan]</td>
         <td>$total</td>
         <td><button name='update'class='btn-warning'>Update</button></td>
         <td><button name='remove'class='btn-danger'>Delete</button></td>
         <td><input type='hidden'name='item'value='$value[productname]'></td


         
         
         </tr> 
         </form>
        
         ";
         

      }
    }
           
           
    ?>
    </tbody>

        <div>
        <div class="col-lg-3 text-center">
        <h3>Total</h3>
        <h1 class="bg-danger text-white"> <?php echo number_format($ptotal,2) ?></h1>
        </div>
        </div>
        

        
</body>
</html>