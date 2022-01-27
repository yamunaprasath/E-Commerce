<?php
 session_start();

 include "ProductDetails.php";

if(isset($_POST['submit'])) {
    $productType = $_POST['product_type'];
    $productName = $_POST['product_name'];
    $vendor = $_POST['vendor'];
    $stock = $_POST['stock'];
    $productPrice = $_POST['product_price'];
    $discount = $_POST['discount'];
    $productSize = $_POST['size'];
    $productColor= $_POST['color'];
    $description= $_POST['description'];


    //   print_r($_POST);
    //  die;
    // $image = $_FILES['images']['name'];
    // $tempName= $_FILES['images']['name'];
    // $images = [];
    // $best_deal= [];
    // foreach($_FILES['images']['name'] as $key=>$value){
    //     // echo  "$key=$value.<br>";
    //     // die;
    //     $image = "img-". $value;
         
    //     move_uploaded_file($_FILES ['images'] ['tmp_name'] [$key], 'uploads/'. $image);
    //     $images[] = $image;
        
    // }
    // $uploadpictures = implode(',', $images);

    $picture = new UserDetails();    
    $picture->addProduct($_FILES , $_POST); 
      
}

if(isset($_GET['Id'])) {
    $edit = new  ProductDetails();
    $details = $edit-> buynow($_GET['Id']);
    
    foreach($details as $result){

        $result->getProductName();
        $result->getProductType();
        $result->getVendor();
        $result->getProductPrice();
        $result->getStock();
        $result->getDiscount();
        $result->getSize();
        $result->getColor();
        $result->getImage();
        $result->getDescription();
        
    }
}
   

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcomepage</title>
</head>
<body>
    <h1 style="text-align:center">Hello- <?php $welcome = isset($_SESSION['name']) ? $_SESSION['name'] :'create Account'; echo $welcome;?></h1>  
<?php
  if(isset($_SESSION['name'])==true){
   ?>   
    <form action="" method="POST"  enctype="multipart/form-data">

        <label for=""style = "margin:20px">Product type</label><br>
        <input  type = 'text' name="product_type"   style = "margin:20px" value= "<?php echo isset($_GET['Id']) ? $result->getProductType() : ''?>"><br>

        <label for=""style = "margin:20px">Product name</label><br>
        <input type = 'text' name="product_name"   style = "margin:20px"  value= "<?php echo isset($_GET['Id']) ? $result->getProductName() : ""?>"><br>

        <label for=""style = "margin:20px">Vendor</label><br>
        <input type = 'text' name="vendor"  style = "margin:20px" value= "<?php echo  isset($_GET['Id']) ? $result->getVendor() : ""?>"><br>

        <label for=""style = "margin:20px">Stock</label><br>
        <input  type = 'number' name="stock" style = "margin:20px" value= "<?php echo  isset($_GET['Id']) ? $result->getStock() : ""?>"><br>

        <label for=""style = "margin:20px">Product Discount</label><br>
        <input type = 'text' name="discount"  style = "margin:20px" value= "<?php echo  isset($_GET['Id']) ? $result->getDiscount() : ""?>"><br>

        <label for="" style = "margin:20px">Select size</label><br>
        <select style = "margin:20px" name ="size" value= "<?php echo  isset($_GET['Id']) ? $result->getColor() : ""?>" >
            <option value='Small'>Small</option>
            <option value='Medium'>Medium</option>
            <option value='Large'>Large</option>
            <option value='' selected>Select Size</option>
        </select><br>

        <label for="" style = "margin:20px">Select color</label><br>
        <select style = "margin:20px" name=" color">
            <option value='blue'>Blue</option>
            <option value='green'>Green</option>
            <option value='red'>Red</option>
            <option value='yellow'>Yellow</option>
             <option value='' selected>Select Color</option>
        </select><br>

        <label for=""style = "margin:20px">Product price</label><br>
        <input  type = 'number' name="product_price"  style = "margin:20px"  value= "<?php  echo isset($_GET['Id']) ? $result->getProductPrice() : ""?>"><br>

        <label style = "margin:20px">Description</label><br>
        <textarea  style = "margin:20px" name="description" id="" cols="30" rows="10"  value= "<?php  echo isset($_GET['Id']) ? $result->getDescription() : ""?>"></textarea><br>
        
        
        <label style = "margin:20px">Product Image</label><br>
        <input type="file" name="images[]" multiple="multiple" accept="image/*" style = "margin:20px" /><br><br>

        <label style = "margin:20px">Best Deal Of Product</label><br>
        <input type="file" name="best_deal[]" multiple="multiple" accept="image/*" style = "margin:20px" /><br><br>
    

<?php
     
    if(isset($_GET['Id'])==true) {
    ?>
        <input type="submit" name="edit" value="Save">

<?php
    } else{
    ?>
        <input type="submit"  name="submit" style = "margin:20px">

<?php
    }
    ?>

    </form>

    <?php

       
    
    if (isset($_POST['edit'])) {
        $update = new ProductDetails();
        $update->setId($_GET['Id']);
        $update->updatedata($_POST);

        header("Location:DisplayAllProduct.php");
    }
?>
<?php
  }
  ?>
</body>
</html>