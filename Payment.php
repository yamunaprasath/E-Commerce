<?php
session_start();
//  echo $_SESSION['id'];
//  die;
    include "ProductDetails.php";
        if(isset($_SESSION['id'])){
            $product=new ProductDetails();
            $details =$product->buynow($_SESSION['id']); 
        }
?>

<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Payment page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
      <div class='container d-flex'>
        <div class="h4">
            <span>Fabulous Sectioned Shopify Theme</span>
        </div>
    </div>
    
    <div class='container d-flex'>
        <div class="ms-5" style="color:gray">
                <div class="container d-flex ">
                    <div>  
                        <?php
                            foreach($details as $result){
                                $images = explode(",", $result->getImage());
                                foreach($images as $image){
                                  
                                }
                                echo"<img src='uploads/$image' width=200px height=200px>";
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
                        <span class="ms-5"><?php echo "$" . $result->getProductPrice() * $_SESSION['quantity'];?></span>
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
                        <span class="ms-5"><?php echo" USD $ "; echo $result->getProductPrice()*$_SESSION['quantity'] + 4.32;?></span>
                    </div>
                </div>
        </div>

        <div>
            <div style='padding-left:12rem; text-align:center;' id="smart-button-container">
                <div style="text-align: center">
                    <label for="description"></label>
                    <input type="text" name="descriptionInput" id="description" maxlength="127" value="">
                </div>

                <p id="descriptionError" style="visibility: hidden; color:red; text-align: center;">Please enter a description</p>
                <div style="text-align: center">
                <label for="amount"> </label>
                <input name="amountInput" type="number" id="amount" value="<?php echo $result->getProductPrice()*$_SESSION['quantity'] + 4.32;?>" >
                <span> USD</span></div>
                <p id="priceLabelError" style="visibility: hidden; color:red; text-align: center;">Please enter a price</p>
                <div id="invoiceidDiv" style="text-align: center; display: none;"><label for="invoiceid"> </label><input name="invoiceid" maxlength="127" type="text" id="invoiceid" value="" ></div>
                <p id="invoiceidError" style="visibility: hidden; color:red; text-align: center;">Please enter an Invoice ID</p>
                <div style="text-align: center; margin-top: 0.625rem;" id="paypal-button-container"></div>
            </div>
            <script src="https://www.paypal.com/sdk/js?client-id=sb&enable-funding=venmo&currency=USD" data-sdk-integration-source="button-factory"></script>
            <script>
            function initPayPalButton() {
                var description = document.querySelector('#smart-button-container #description');
                var amount = document.querySelector('#smart-button-container #amount');
                var descriptionError = document.querySelector('#smart-button-container #descriptionError');
                var priceError = document.querySelector('#smart-button-container #priceLabelError');
                var invoiceid = document.querySelector('#smart-button-container #invoiceid');
                var invoiceidError = document.querySelector('#smart-button-container #invoiceidError');
                var invoiceidDiv = document.querySelector('#smart-button-container #invoiceidDiv');

                var elArr = [description, amount];

                if (invoiceidDiv.firstChild.innerHTML.length > 1) {
                invoiceidDiv.style.display = "block";
                }

                var purchase_units = [];
                purchase_units[0] = {};
                purchase_units[0].amount = {};

                function validate(event) {
                return event.value.length > 0;
                }

                paypal.Buttons({
                style: {
                    color: 'gold',
                    shape: 'pill',
                    label: 'paypal',
                    layout: 'vertical',
                    
                },

                onInit: function (data, actions) {
                    actions.disable();

                    if(invoiceidDiv.style.display === "block") {
                    elArr.push(invoiceid);
                    }

                    elArr.forEach(function (item) {
                    item.addEventListener('keyup', function (event) {
                        var result = elArr.every(validate);
                        if (result) {
                        actions.enable();
                        } else {
                        actions.disable();
                        }
                    });
                    });
                },

                onClick: function () {
                    if (description.value.length < 1) {
                    descriptionError.style.visibility = "visible";
                    } else {
                    descriptionError.style.visibility = "hidden";
                    }

                    if (amount.value.length < 1) {
                    priceError.style.visibility = "visible";
                    } else {
                    priceError.style.visibility = "hidden";
                    }

                    if (invoiceid.value.length < 1 && invoiceidDiv.style.display === "block") {
                    invoiceidError.style.visibility = "visible";
                    } else {
                    invoiceidError.style.visibility = "hidden";
                    }

                    purchase_units[0].description = description.value;
                    purchase_units[0].amount.value = amount.value;

                    if(invoiceid.value !== '') {
                    purchase_units[0].invoice_id = invoiceid.value;
                    }
                },

                createOrder: function (data, actions) {
                    return actions.order.create({
                    purchase_units: purchase_units,
                    });
                },

                onApprove: function (data, actions) {
                    return actions.order.capture().then(function (orderData) {

                    // Full available details
                    console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

                    // Show a success message within this page, e.g.
                    const element = document.getElementById('paypal-button-container');
                    element.innerHTML = '';
                    element.innerHTML = '<h3>Thank you for your payment!</h3>';

                    // Or go to another URL:  actions.redirect('thank_you.html');
                    
                    });
                },

                onError: function (err) {
                    console.log(err);
                }
                }).render('#paypal-button-container');
  }
  initPayPalButton();
  </script>

    </div>
        
    











<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src='./assets/js/slick.min.js'></script>
<script src="./assets/js/code.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>  
</body>
</html>






<!-- <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
            <input type="hidden" name="cmd" value="_xclick">
            <input type="hidden" name="business" value="9HT9TNERMVY3G">
            <input type="hidden" name="lc" value="IN">
            <input type="hidden" name="item_name" value="orders">
            <input type="hidden" name="button_subtype" value="services">
            <input type="hidden" name="no_note" value="1">
            <input type="hidden" name="no_shipping" value="1">
            <input type="hidden" name="currency_code" value="USD">
            <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHosted">
            <input type="image" src="https://www.paypalobjects.com/en_GB/i/btn/btn_buynowCC_LG.gif" style='border=0;' name="submit" alt="PayPal - The safer, easier way to pay online!">
            <img alt="" style = 'border=0;' src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
            </form> -->