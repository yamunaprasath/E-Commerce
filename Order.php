<?php
session_start();
    include "ProductDetails.php";
        if(isset($_GET['id'])){
            $_SESSION['id'] = $_GET['id'];
            $product=new ProductDetails();
            $details =$product->buynow($_GET['id']); 
        }

        if(isset($_POST['order'])) {
            $verify = new UserDetails();
            $check = $verify ->verifyCustomer($_POST['email']);

            if($check['Id']>0){

                $order = new ProductDetails();
       
                $order->setCountry ($_POST['country']);
                $order->setFirstName ($_POST['fname']);
                $order->setLastName ($_POST['lname']);
                $order->setEmail ($_POST['email']);
                $order->setContact ($_POST['contact']);
                $order->setAddress ($_POST['address']);
                $order->setCity ($_POST['city']);
                $order->setState ($_POST['state']);
                $order->setPincode ($_POST['pincode']);
                $order->setId ($_GET['id']);
                $order->setColor ($_SESSION['color']);
                $order->setSize ($_SESSION['size']);
                $order->setQuantity ($_SESSION['quantity']);


                if($_SESSION['stock'] >= $_SESSION['quantity']){

                    $stock =  $_SESSION['stock'] - $_SESSION['quantity'];
                    
                }

                $order-> updateStock($stock,$_GET['id']);

                $order->orders();

            }else {
                echo"Please, Check Your Contact or E-mail";
            }
           
       }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkouts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <link rel="stylesheet" href="./assets/css/slick.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<header>
    <div class="container d-flex">
        <div>
            <div class="h4">
                <span>Fabulous Sectioned Shopify Theme</span>
            </div>

            <div class="h6">
                <span>New User Please SignUp <a style="text-decoration: none;" href="Customersign.php">Sign up?</a></span>
            </div>

            <div class="">
                <div>
                    <span class="h5">Contact information</span>
                </div>
                <div class="text-left col-md-6 mt-4">
                    <span  class="h6 ">Shipping Adderss</span> 
                </div>
            </div>
            
            <form  class="mt-3" action="" method='POST'>
                <div class="form-inline">
                    <select class="form-control" name="country" id="">
                        <option value="America">America</option>
                        <option value="India" selected>india</option>
                        <option value="China">china</option>
                        <option value="Russia">Russia</option>
                    </select>
                </div>

                <div class="d-flex mt-3">
                    <div class="col-md-6">
                        <input class="form-control" type="text" value=""  name='fname' placeholder="First Name*">
                    </div>

                    <div class="col-md-6 ms-1">
                        <input class="form-control" type="text" value="" name='lname' placeholder="Last Name(optional)">
                    </div>
                </div>

                <div class="d-flex mt-3">
                    <div class="col-md-6">
                        <input class="form-control" type="number"  name='contact' placeholder="Contact">
                    </div>

                    <div class="col-md-6 ms-1">
                        <input class="form-control" type="text" value="" name='email' placeholder="E-mail">
                    </div>
                </div>

                <div class="mt-3">
                        <input  class="form-control" type="text" value=""  name='address' placeholder="Address">
                </div>

                <div class ="d-flex pt-2 ">
                    <div>
                        <input class="form-control" type="text" value="" name='city' placeholder="City">
                    </div>
                    <div class="ms-1">
                        <select class="form-control" name="state" id="">
                        <option value="Tamilnadu" selected >Tamilnadu</option>
                        <option value="Kerala" >Kerala</option>
                        <option value="Karnadaka">Karnadaka</option>
                        <option value="Telungana">Telungana</option>
                        </select>
                    </div>
                    <div  class="ms-1">
                        <input class="form-control" type="text" value="" name='pincode' placeholder="Pin Code">
                    </div>
                </div>

                <div>
                    <input type="checkbox" id="" name="">
                    <label for="vehicle1">Save this information for next time</label>
                </div>

                <div >
                    <input  class="form-control btn btn-primary" type="submit" name="order" value="Condinue to Payment">
                </div>
            </form>
        </div>
                
        <div class="ms-5" style="color:gray">
            <div class="container d-flex ">
                <div>  
                    <?php
                        foreach($details as $result){
                            $images = explode(",", $result->getImage());
                            foreach($images as $image){
                               
                            }
                            echo"<img src='uploads/$image' width=150px height=150px>";
                        }
                    ?>
                </div>
                <div class="container mt-4">
                    <div class="">
                        <span><?php echo "Price - $" . $result->getProductPrice();?></span>
                    </div>
                    <div>
                        <span><?php echo "Color -" . $_SESSION['color']; ?></span>
                    </div>
                    <div>
                        <span><?php echo "Size -" . $_SESSION['size']; ?></span>
                    </div>
                    <div>
                        <span><?php echo "Quantity -" . $_SESSION['quantity']; ?></span>
                    </div>
                </div>
            </div>

            <div class="container d-flex">
                <div class="mt-4">
                    <span>Sub Total</span>
                </div>
                <div class="mt-4">
                    <span class="ms-5"><?php echo "$" . $result->getProductPrice() *  $_SESSION['quantity'];?></span>
                </div>
            </div>

            <div class="container d-flex">
                <div class="mt-4">
                    <span>Shipping</span>
                </div>
                <div class="mt-4">
                    <span class="ms-5">Calculated at next step</span>
                </div>
            </div>

            <div class="container d-flex">
                <div class="mt-4">
                    <span>Taxes (estimated)</span>
                </div>
                <div class="mt-4">
                    <span class="ms-5">$4.32</span>
                </div>
            </div>

            <div class="container d-flex">
                <div class="mt-4">
                    <span>Total</span>
                </div>

                <div class="mt-4">
                    <span class="ms-5"><?php echo" USD $ "; echo $result->getProductPrice() * $_SESSION['quantity'] + 4.32;?></span>
                </div>
            </div>
        </div>
    </div>
</header>







<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src='./assets/js/slick.min.js'></script>
<script src="./assets/js/code.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>  
</body>
</html>