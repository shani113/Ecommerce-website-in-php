<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

</head>
<body>
    <div class="container bg-dark">
    <div class="row">
    <div class="col-md-6  mt-5 m-auto bg-white shadow font monopsace border border-info">
    <p class="text-warning  text-center fs-3 fw-bold  my-3">User Register</p>
    <form action="insert.php" method="POST">
    <div class="mb-3">
    <label for="">UserName</label>
    <input type="text"  name="Name"placeholder="Enter userName" class="form-control">
    </div>
    <div class="mb-3">
    <label for="">User Email</label>
    <input type="Email"name="Email" placeholder="Enter User Email" class="form-control">
    </div>
    <div class="mb-3">
    <label for="">User Number</label>
    <input type="Number"name="uNumber" placeholder="Enter User Number" class="form-control">
    </div>
    <div class="mb-3">
    <label for="">User Password</label>
    <input type="password" name="pass"placeholder="Enter User Password" class="form-control">
    </div>
    <div class="mb-3">
    <button  name="submit"class="w-100 bg-warning fs-4 text-white">Register</button>
    </div>
    <div class="mb-3">
    <button  class="w-100 bg-dark fs-4 text-white"><a href="login.php " class="text-decoration-none text-white">ALready Account</a></button>
    </div>
    </form>

    </div>
    </div>
    </div>
</body>
</html>