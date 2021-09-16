<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

</head>
<?php
  session_start();
  if(!$_SESSION['admin']){
    header("location:form/login.php");
  }

  
?>
<body>
<nav class="navbar navbar-light bg-dark">
  <div class="container-fluid text-white">
    <a class="navbar-brand text-white"><h1>MyStore</h1></a>
    <span>
    <i class="fas fa-user-cog"></i>
    hello<?php echo $_SESSION['admin'];?>
    <i class="fas fa-sign-out-alt"></i>
    <a href="form/logout.php" class="text-decoration-none text-white">Logout</a>
    |
    <a href=""class="text-decoration-none text-white">UserPanel</a>
    </span>
  </div>
</nav>
<div>
  <h2 class="text-center">Dashboard</h2>
</div>
<div class="col-md-6 bg-danger text-center m-auto">
   <a href="product/index.php" class="text-white text- decoration- none fs-4 fw-bold px-5">Add Post</a>
   <a href=""class="text-white text- decoration- none fs-4 fw-bold px-5">Users</a>
</div>
</body>
</html>