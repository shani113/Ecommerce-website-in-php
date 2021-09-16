<?php
   
     $con=mysqli_connect('localhost','root','','ecommerece');
  if(isset($_POST['submit'])){
      $name=$_POST['Name'];
      $Email=$_POST['Email'];
      $Number=$_POST['uNumber'];
      $Password=$_POST['pass'];
      
       $Dup_Email=mysqli_query($con,"SELECT * FROM `tbluser` WHERE email='$Email'");
       $dub_username=mysqli_query($con,"SELECT * FROM `tbluser` WHERE username='$name'");
       if(mysqli_num_rows($Dup_Email)){
           echo "
        <script>
            alert('This email is alreday taken');
            window.location.href='register.php';
           </script>
           ";
       }
       if(mysqli_num_rows($dub_username)){
        echo "
     <script>
         alert('This username is already taken');
         window.location.href='register.php';
        </script>
        ";
    }
    else {
        mysqli_query($con,"INSERT INTO `tbluser`(`username`,`email`,`Number`,`Password`)
       VALUES ('$name', '$Email','$Number','$Password')");
        echo "
        <script>
            alert('Successfully Record added');
            window.location.href='login.php';
           </script>
           ";

    }
 

     
  }
?>