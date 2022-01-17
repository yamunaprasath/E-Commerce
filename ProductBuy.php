<?php
 session_start();
    include "ProductDetails.php";
        if(isset($_GET['id'])){
            $product=new ProductDetails();
            $details = $product->buynow($_GET['id']);
        }

            if(isset($_POST['buy'])){
                echo $_SESSION['color'] = $_POST['color'];
                echo $_SESSION['size'] = $_POST['size'];
                echo  $_SESSION['quantity'] = $_POST['quantity'];
                header('Location:Order.php?id='.$_GET['id']);
        }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy The Product</title>
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
    <header class='head'>
       <img src="./assets/image/Logo.png">
    </header>


<section>
    <div class="container">
        <div class="row" >
            <div class="col-md-5">
                <?php
                    foreach($details as $result){

                        $_SESSION['stock'] = $result->getStock();

                        $images = explode(",", $result->getImage());
                        foreach($images as $key => $image){    
                        }

                        // print_r("<img class='img-fluid' src='uploads/$images[0]'>");
                        // print_r("<img class='img-fluid' src='uploads/$images[1]'>");
                        // print_r("<img class='img-fluid' src='uploads/$images[2]'>");
                       ?>
                        <div class="slider-for">
                            <div class="image1"><?php print_r("<img class='img-fluid'  width=400px; height=400px; src='uploads/$images[0]'>");?></div>
                            <div class="image1"><?php print_r("<img class='img-fluid' width=400px; height=400px; src='uploads/$images[1]'>");?></div>
                            <div class="image1"><?php print_r("<img class='img-fluid' width=400px; height=400px; src='uploads/$images[2]'>");?></div>

                        </div>
                        <div class="slider-nav">
                            <div class="image2"><?php print_r("<img class='img-fluid' src='uploads/$images[0]'>");?></div>
                            <div class="image2"><?php print_r("<img class='img-fluid' src='uploads/$images[1]'>");?></div>
                            <div class="image2"><?php print_r("<img class='img-fluid' src='uploads/$images[2]'>");?></div>

                        </div>
                <?php
                    }
                ?>
            </div>
            <div class="col-md-7">
                <div class="product__info-container product-detail-page">
                    <a href="/products/base-foundation" class="product__title" style="margin-bottom: 12px; font-size: 26; line-height: 60px;">
                        <?php echo $result->getProductName();?>
                    </a>
                </div>
                <span class="spr-starrating spr-badge-starrating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star "></span>
                </span>
                <a class="spr-badge-caption" href= "#pills-profile-tab">Write reviews <i class="fa fa-pencil"></i></a>
                <div class="product-price">
                    <span class=""> <b><?php echo "Price:$" . $result->getProductPrice();?></b></span>
                    <div class="">Price: <s class=""> $60.00</s></div>
                    <span class=""> <b><?php echo "Discount :" . $result->getDiscount();?></b></span>
                </div>
                <div class="quantity-value" style="color:red;"> <b>Hurry! Only <?php echo $result->getStock(); ?> units left in stock!</b></div>
                <div>
                    <ul>
                        <li><?php echo "Vendor:" . $result->getVendor();?></li>
                        <li><?php echo "Product type:" . $result->getProductType();?></li> 
                        <li>Sku : asdhjk</li>
                    </ul>
                </div>
                <div class="progress">
                    <div class="progress-bar" style="width: 30%;"></div>
                </div>
                <div style="display: flex;" >
                    <div style="margin: 10px;">Viewlist</div>
                    <div  style="margin: 10px;">sizechart</div>
                </div>

                <form action="" method='POST' name="buy">

                    <fieldset class="js product-form__input size">
                
                        <input type="radio" name="size" value="S" checked="">
                        
                        <label class="square"> S </label>
                        
                        <input type="radio"  name="size" value="M">
                        
                        <label class="square"> M </label>
                        
                        <input type="radio" name="size" value="L">
                        
                        <label class="square"> L </label>
                    
                    </fieldset>

                    <fieldset class="js product-form__input color">

                        <legend class="form__label" name="color">Color</legend>

                        <input type="radio" name="color" value="Blue" checked="">
                        
                        <label style="background-color:blue"> Blue</label>
                        
                        <input type="radio" name="color" value="Yellow" >
                        
                        <label  style="background-color: yellow; ">Yellow</label>
                        
                        <input type="radio" name="color" value="Green" >
                        
                        <label  style="background-color: green; ">Green</label>

                        <input type="radio" name="color" value="Red" >
                        
                        <label  style="background-color: red; ">Red</label>
                    
                    </fieldset>
                    
                    <div class="mt-3">
                        <label for="">Quantity</label>
                        <input type="number"  name ='quantity' min="1" max="10" value="1">
                    </div>

                 <input  type="submit" class="btn  btn-success" style="background-color:#e38ea5; border:0px solid; padding: 0.375rem 3.75rem; margin:20px;" value="Buy Now" name="buy">
                    
                </form>
                <?php
                    if(isset($_POST['buy'])){
                        $_SESSION['color'] = $_POST['color'];
                        $_SESSION['size'] = $_POST['size'];
                        $_SESSION['quantity'] = $_POST['quantity'];


                        
                    }     
                ?>
                <div class="delivery-section row">
                    <div class="delivery-icon col-lg-6 col-md-12 col-sm-6 col-xs-12">
                        <div class="delivery-img">
                            <img src="./assets/image/serviceicon1.png" style="margin-right:10px;">
                        </div>
                        <div class="delivery-content">
                            <p>Free Delivery</p>
                            <p>Lorem Ipsum dummy</p>
                        </div>
                    </div>
                    <div class="delivery-icon col-lg-6 col-md-12 col-sm-6 col-xs-12">
                        <div class="delivery-img">
                            <img src="./assets/image/serviceicon3.png" style="margin-right:10px;">
                        </div>
                        <div class="delivery-content">
                            <p>Big Savings</p>
                            <p>Lorem Ipsum dummy</p>
                        </div>
                    </div>
                    <div class="delivery-icon col-lg-6 col-md-12 col-sm-6 col-xs-12">
                        <div class="delivery-img">
                            <img src="./assets/image/serviceicon2.png" style="margin-right:10px;">
                        </div>
                        <div class="delivery-content">
                            <p>Customer Support</p>
                            <p>Lorem Ipsum dummy</p>
                        </div>
                    </div>
                    <div class="delivery-icon col-lg-6 col-md-12 col-sm-6 col-xs-12">
                        <div class="delivery-img">
                            <img src="./assets/image/serviceicon4.png" style="margin-right:10px;">
                        </div>
                        <div class="delivery-content">
                            <p>Gift Voucher</p>
                            <p>Lorem Ipsum dummy</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div>
</div>
</div>
</section>

<ul class="nav nav-pills mb-3 d-flex justify-content-center m-t-50" id="pills-tab" role="tablist">
    <li class="nav-item  nav-black" role="presentation">
      <button class="nav-link active nav-text-color" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Description</button>
    </li>
    <li class="nav-item nav-black" role="presentation">
      
        <button class="nav-link  nav-text-color" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Reviews</button>
    </li>
    <li class="nav-item nav-black" role="presentation">
      <button class="nav-link  nav-text-color" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Shipping & Return</button>
    </li>
  </ul>

  <div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
    <div class=' container nav-text-size'>
        <p  class='nav-subtext-color'> <?php echo $result->getDescription();?></p>
    </div>
    </div>

    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">   
    
    <div class="container">
        <div class="">
            <form action="" method='POST' name='writereview'>
                <input class="form-control-lg" type="text" name='username' placeholder='User Name*'>
                
                <input  class="form-control-lg" type="email" name="email" placeholder='Email*'>
        
                <input  class="form-control-lg" type="number" name="contact" placeholder='Contact'><br>
    
                <div>
                    <textarea  class="form-control-lg" name="comments" placeholder="comments" rows="5" cols="50"></textarea>
                </div>
        </div>

        <div style="text-align: center;">
            <input class='view2-btn' name='reviews' type="submit" value="submit">
        </div>

            </form>
    <div style="font-size:19px; color:#787878">
    <?php
        
        
        if(isset($_POST['reviews'])){
            $name = $_POST['username'];
            $email = $_POST['email'];
            $contact = $_POST['contact'];
            $reviews = $_POST['comments'];
        
           $review = new UserDetails();
           $review->setName($name);
           $review->setEmailId($email);  
           $review->setContact($contact);
           $review->setComment($reviews);
           $review->addReview();
        
        }   
            $show = new UserDetails();
             $review = $show->displayReview();
            //print_r($show);
            foreach($review as $reviews){
                echo $reviews->getname() . "<br>" . $reviews->getComment() ."<br>";
            }
         
    ?>
            
    </div>
    </div>
    
    </div>

 <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
    <div class="container nav-text-size">
        <div class="">
           <span><b>Returns Policy</b></span>
           <p class='nav-subtext-color'>You may return most new, unopened items within 30 days of delivery for a full refund.
              We'll also pay the return shipping costs if the return is a result of our error (you received an incorrect or defective item, etc.).</p><br>

              <p class='nav-subtext-color'>You should expect to receive your refund within four weeks of giving your package to the return shipper, 
                  however, in many cases you will receive a refund more quickly. This time period includes the transit 
                  time for us to receive your return from the shipper (5 to 10 business days), the time it takes us to
                   process your return once we receive it (3 to 5 business days), 
                  and the time it takes your bank to process our refund request (5 to 10 business days).</p><br>
        </div>
        <div >
        <span><b>Shipping</b></span>
            <p class='nav-subtext-color'>We can ship to virtually any address in the world. Note that there are restrictions on some products,
                 and some products cannot be shipped to international destinations</p><br>
            
            <p class='nav-subtext-color'>When you place an order, we will estimate shipping and delivery dates 
                    for you based on the availability of your items and the shipping options you choose. 
                    Depending on the shipping provider you choose,
                    shipping date estimates may appear on the shipping quotes page.</p><br>
        </div>
    </div>
    </div>




<footer>
        <div class='d-flex'>
        <div class='footer-top'>    
        <div class ='logo'>
            <ul>
                <li class='list'>
                    <i class="fas fa-map-marker-alt"></i>
                        <div class='content'>
                            <div class='title'>Location</div>
                            <p>4005 Silver business point</p>
                            <p>india</p>
                        </div>
                </li>
                <li class='list'> 
                    <i class="fas fa-phone"></i> 
                        <div class='content'>
                            <div class='title'>Contact Us</div>
                            <p>9856321455</p>
                        </div>
                </li>
                <li class='list'> 
                    <i class="fas fa-envelope"></i>
                        <div class='content'>
                            <div class='title'>Email</div>
                            <p>info@gmail.com</p>
                        </div>
                </li>
            </ul>
        </div>
        </div>         
        </div>
    </div>
        <div class="copyright">© 2021, Fabulous Sectioned Shopify Theme</div>
        </div>         
    </footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src='./assets/js/slick.min.js'></script>
<script src="./assets/js/code.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

</body>
</html>

