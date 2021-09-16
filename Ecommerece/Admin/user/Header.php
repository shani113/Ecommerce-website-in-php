<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

</head>
<body>
  <?php
  session_start();
  $count=0;
    if(isset($_SESSION['cart']))
    { 
      $count=count($_SESSION['cart']);

    }
  ?>
    <nav class="navbar navbar-light bg-light">
  <div class="container-fluid font-monospace">
    <a class="navbar-brand pb-2"><img src="logo.png"></a>
    
    <div class="d-flex">
    <a href="index.php" class="text-warning text-decoration-none pe-2"><i class="fas fa-home"></i>Home</a>
    <a href="viewCart.php" class="text-warning text-decoration-none pe-2"><i class="fas fa-shopping-cart"></i></i>Cart(<?php   echo $count ?>)</a>
    
    <span class="text-warning-pe-2">
    <i class="fas fa-user-shield"></i>Hello,|
      <?php
       if(isset($_SESSION['user']))
       {
        echo $_SESSION['user'];
        echo "
       |<a href='form/logout.php'class='text-warning text-decoration-none pe-2'><i class='fas fa-sign-in-alt'></i>LOGOUT</a>
          ";
       }
       else
       {
        echo "
        |<a href='form/login.php'class='text-warning text-decoration-none pe-2'><i class='fas fa-sign-in-alt'></i>LOGIN</a>
          ";
       }

      ?>
   |
    <a href="http://localhost/Ecommerece/Admin/form/login.php"class="text-warning text-decoration-none pe-2">Admin</a>
    </span>
  
</nav>
</div>
<div class="bg-danger sticky-top font-monospace">
<ul class="list-unstyled d-flex justify-content-center">
<li><a href="laptop.php" class="text-decoration-none text-white fw-bold fs-4 px-5">Laptop</a></i>
<li><a href="mobile.php" class="text-decoration-none text-white fw-bold fs-4 px-5">Mobile</a></i>
<li><a href="bag.php" class="text-decoration-none text-white fw-bold fs-4 px-5">Bag</a></i>

</ul>
</div>
</body>
</html>