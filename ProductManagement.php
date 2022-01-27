<?php
session_start();
  include "ProductDetails.php";

  $home = new ProductDetails();
  $result = $home->homepage();
?>

<html>
<head>
</head>

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
    <th>image</th>
    <th>Best Deals</th>

<?php
  foreach ($result as $data) {
    
?>
<?php 
    $images = explode(",", $data->getImage());
    $deals = explode(",", $data->getBestDeals());
?>
  <tr>
    <td> <?php echo $data->getId();?> </td> 
    <td> <?php echo $data->getUserId(); ?> </td>
    <td> <?php echo $data->getProductType(); ?> </td> 
    <td> <?php echo $data->getProductName(); ?> </td> 
    <td> <?php echo $data->getVendor(); ?> </td> 
    <td> <?php echo $data->getStock(); ?> </td> 
    <td> <?php echo $data->getProductPrice(); ?> </td> 
    <td>
      <?php
        foreach($images as $image){
        echo"<img src='uploads/$image' width ='100px' height = '100px'>";
        }
      ?>
    </td>
    <td> 
      <?php
        foreach($deals as $best){
        echo"<img src='uploads/$best' width ='80px' height ='100px'>";
        }
      ?>
    </td>
   
  </tr>
<?php
  }
?>
</table>
</html>
    