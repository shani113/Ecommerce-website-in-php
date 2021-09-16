<?php
$con=mysqli_connect('localhost','root','','ecommerece');
$A_name=$_POST['Username'];
$A_password=$_POST['userpassword'];

$result=mysqli_query($con,"SELECT * FROM `admin` WHERE username='$A_name' AND password='$A_password'");
session_start();
 
if(mysqli_num_rows($result)){
    $_SESSION['admin']=$A_name;
    echo"
    <script>
    alert('login successfully');
    window.location.href='../m.php'
    </script>

    ";
}
else{
    echo"
    <script>
    alert('Invalid username or password');
    window.location.href='login.php'
    </script>

    ";
}



?>