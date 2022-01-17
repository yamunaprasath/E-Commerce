<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <link rel="stylesheet" href="./assets/css/slick.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Cosmetic</title>

</head>
<body>
    <header class='head'>
       <img src="./assets/image/Logo.png">
    </header>

    <section>
        <div class ="container">
            <h4>Cosmetic</h4>
                <div class="text-muted h5">
                    <p>Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. 
                        Accessorize with a straw hat and you're ready for summer! 
                        Accessorize with a straw hat and you're ready for summer! 
                        Accessorize with a straw hat and you're ready for summer!
                        Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit.
                        Accessorize with a straw hat and you're ready for summer!...
                    </p><br>

                    <p> Faded short sleeves t-shirt with high neckline. 
                        Soft and stretchy material for a comfortable fit. 
                        Accessorize with a straw hat and you're ready for summer!...
                    </p>
                </div>
        </div>
    </section>

    <section class="text-center">
    <img class=" lazyloaded" src="./assets/image/cosmetic7.png">
    </section>


<section class="container">
   <?php
    include "ProductDetails.php";
    $show =new ProductDetails();
    $details= $show-> homePage();
     // print_r($show);
   ?>
    <table class="products-overview">
        <?php
            foreach($details as $result){
        ?>
        <tr>
            <td>
                <?php
                 $images = explode(",", $result->getImage());
                 foreach($images as $image){
                 }
                 echo"<img src='uploads/$image' text-center width ='300px' height = '300px'>";
                 ?>
            </td>
  
            <td class="h5 short-description"> 

                <?php echo $result->getProductName()."<br>"; ?>
                
                <?php echo "Price $" . $result->getProductPrice()."<br>"; ?>

                <?php echo "Discount $" . $result->getDiscount(); ?>
                

                <p class="text-muted w-75 p-3">  <?php echo$result->getDescription(); ?></p>
                <a  class=" btn btn-danger btn-sm h6" style="background-color: #c36587; border-color: #c36587;" href="ProductBuy.php?id=<?php echo $result->getId();?>">BUY NOW</a>

            </td>

            
        </tr>

        <?php   
                }
        ?>
    </table>
</section>

<section class="container">
<div class="pagination-block text-center d-flex">
    <p class="collection-product-count col-md-6 h5  " role="status"> Pages ></p>
    <div class="col-md-6 pagination-view">
            
        <div class="pagination-wrapper">
            <nav class="pagination" role="navigation" aria-label="Pagination">
                <ul class="pagination__list list-unstyled d-flex h5" role="list">
                    <li><a href="/collections/cosmetic?page=1" class="pagination__item pagination__item--next pagination__item-arrow link motion-reduce" aria-label="Previous">
                        <svg xmlns="" style="display: none;">          
                        <symbol id="caret" viewBox="0 0 10 6">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z" fill="currentColor"></path>
                        </symbol> 
                        </svg>
                        <svg class="icon icon-caret" viewBox="0 0 10 6"><use xlink:href="#caret" x="0%" y="0%"></use></svg>

                        </a>
                    </li>
                    <li class="page"><a  href="cosmetic.php?page=1" class="pagination__item link link-danger" aria-label="Page 1">1</a></li>
                    <li class=""><a href="cosmetic.php?page=2" class="pagination__item link link-danger" aria-label="Page 2">2</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
</section>
     





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