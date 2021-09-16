<?php


    $Name =$_POST['Name'];
    $password =$_POST['pass'];


  //$Name=$_POST['Name'];
  //$password=$_POST['pass'];
  
  $con=mysqli_connect('localhost','root','','ecommerece');
  
  
 
 
  $query="SELECT * FROM `tbluser` WHERE (username='$Name' OR email='$Name') AND Password='$password'";

   $result=mysqli_query($con,$query);
   //echo $query; die;
   //echo mysqli_num_rows($result);die;
    
      session_start();
     if(mysqli_num_rows($result)){
         $_SESSION['user']=$Name;
        echo "
        <script>
            alert('successfully login');
            window.location.href='../index.php';
    
           </script>
           ";
      }
      else
      {
        echo "
        <script>
            alert('incorrect Email/username/pasword');
            window.location.href='login.php';
    
           </script>
           ";
      }
    

  
    
  



?>