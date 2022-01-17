<?php
session_start();
include "ProductDetails.php";

  if($_SESSION['id']){
    $user = new ProductDetails();
    $result = $user->userDetails($_SESSION['id']);
  

  }else{
      header("Location:AdminLogin.php");
    }

   if(isset($_GET['id'])) {
       $id = new ProductDetails();
       $id->delete($_GET['id']); 
      header("Location:DisplayAllProduct.php");
   } 

  if(isset($_POST['logout'])){
    session_destroy(); 
     header("Location:AdminLogin.php"); // Or wherever you want to redirect
     exit(); 
   }
?>
  

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>All Products</title>
</head>
<body>
  <style>
    table,th,td {
      border: 1px solid black;
      line-height:45px;
    }
  </style>

  <table>
   
    <th>Id</th>
    <th>User Id</th>
    <th>Product Type</th>
    <th>Product Name</th>
    <th>Vendor</th>
    <th>Stock</th>
    <th>Product Price</th>
    <th>Discount</th>
    <th>Color</th>
    <th>Size</th>
    <th>Description</th>

  <?php
    foreach ($result as $data) {
 
  ?>
  <?php $images = explode(",", $data->getImage()); ?>
    <tr>
      <td> <?php echo $data->getId(); ?> </td>
      <td> <?php echo $data->getUserId(); ?> </td> 
      <td> <?php echo $data->getProductType(); ?> </td>
      <td> <?php echo $data->getProductName(); ?> </td>
      <td> <?php echo $data->getVendor(); ?> </td>
      <td> <?php echo $data->getStock(); ?> </td>
      <td> <?php echo $data->getProductPrice(); ?> </td>
      <td> <?php echo $data->getDiscount(); ?> </td>
      <td> <?php echo $data->getColor(); ?> </td>
      <td> <?php echo $data->getSize(); ?> </td>
      <td> <?php echo $data->getDescription(); ?> </td>
   
    <td> 
  <?php
    foreach($images as $image){
    echo"<img src='uploads/$image' width ='80px' height ='100px'>";
    }
  ?>
    </td>
    <td><a href="ProductUploadPage.php?Id=<?php echo $data->getId();?>">Edit</a></td>
    <td><a  name='delete' href="DisplayAllProduct.php?id=<?php echo $data->getId(); ?>">Delete</a></td>
      
  </tr>
 
  <?php
    }
  ?>
  </table>

  <form  action="" method='POST' style = "text-align: center; margin-top:30px">

    <input style ="cursor: pointer;"  type="submit" value="Logout" name="logout"/>
    
    <a style="" href="ProductUploadPage.php?id=<?php echo $data->getUserId();?>">Upload</a>

  </form>

  
  
</body>
</html>





      
 

  
