<?php



session_start();
if(isset($_SESSION['user'])){



 $product_name = (isset($_POST['PName']) ? $_POST['PName'] : '');
 $product_price = (isset($_POST['product_price']) ? $_POST['product_price'] : '');
 $product_quan = (isset($_POST['Pquantity']) ? $_POST['Pquantity'] : '');
    //$product_name=$_POST['PName'];
   //$product_price=$_POST['product_price'];
    //$product_quan=$_POST['Pquantity'];
    echo $product_name;
    echo $product_price;
    echo $product_quan;
    if(isset($_POST['AddCart'])){
       $check_product=array_column($_SESSION['cart'],'productname');
       if(in_array($product_name,$check_product)){
          echo "
          <script>
          alert('product already added');
          window.location.href='index.php';
          </script>
          ";
       }
      
      else{
      $_SESSION['cart'][]=array('productname'=>$product_name,
      'productprice'=>$product_price,
      'productquan'=>$product_quan);
      header("location:viewcart.php");
      }
   }
      //deleteproduct
       if(isset($_POST['remove'])){
          foreach($_SESSION['cart'] as $key=>$value){
             if($value['productname']===$_POST['item']){
                unset($_SESSION['cart'][$key]);
                $_SESSION['cart']=array_values($_SESSION['cart']);
                header('location:viewcart.php');
             }
          }
       }
      //update product
      if(isset($_POST['update'])){
         foreach($_SESSION['cart'] as $key=>$value){
            if($value['productname']===$_POST['item']){
               $_SESSION['cart'][$key]=array('productname'=>$product_name,
               'productprice'=>$product_price,
               'productquan'=>$product_quan);
               header("location:viewcart.php");
            }
         }
      }
     
   }
   else
   {
      header("location:form\login.php");
   }
      
   

   
?>