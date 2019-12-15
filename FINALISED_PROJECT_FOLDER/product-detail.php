<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="favicon.png" rel="icon">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Fashion HTML Template</title>
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,900%7CTangerine:400,700%7CPlayfair+Display:400,700"
        rel="stylesheet">
    <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="plugins/bootstrap4/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/owl-carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="plugins/slick/slick/slick.css">
    <link rel="stylesheet" href="plugins/lightGallery-master/dist/css/lightgallery.min.css">
    <link rel="stylesheet" href="plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css">
    <link rel="stylesheet" href="plugins/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="plugins/voye-icons/style.css">
    <link rel="stylesheet" href="plugins/selectize/dist/css/selectize.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<?php
session_start();
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$conn = new mysqli("localhost", "root", "", "brsp");
$sql="SELECT bookname,genre,author,publisher,ROUND(price,2) AS price,ROUND(rent_rate,2) AS rent_rate,bookownerid,url FROM book WHERE bookid = '".$_GET["x"]."'";
//check if any result returned
$result =$conn->query($sql);

if(!$result){
	echo "failed";
    }		
$data = $result->fetch_assoc();
$conn->close();
?>

<body>
    <!-- header-->
    <header class="header header--2 header--2-full" data-sticky="true">
        <nav class="navigation">
            <div class="navigation__left"><a class="menu__action" href="#">
                    <div class="menu-toggle"><span></span></div><span>Menu</span>
                </a>
                <ul class="menu">
                    <li class="menu-item-has-children"><a href="#">Home</a><span class="sub-toggle"><i
                                class="fa fa-angle-down"></i></span>
                        <ul class="sub-menu">
                            <li><a href="index.html">Homepage</a></li>

                        </ul>
                    </li>
                    <li class="current-menu-item menu-item-has-children"><a href="#">Shop</a><span
                            class="sub-toggle"><i class="fa fa-angle-down"></i></span>
                        <ul class="sub-menu">
                            <li class="current-menu-item "><a href="product-left-sidebar.html">Product Left Sidebar</a>
                            </li>
                            <li class="current-menu-item "><a href="product-detail.php">Product Detail</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="#">Pages</a><span class="sub-toggle"><i
                                class="fa fa-angle-down"></i></span>
                        <ul class="sub-menu">
                            <li><a href="cart.html">Shopping Cart</a></li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="register.html">Register</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="navigation__center"><a class="ps-logo" href="index.html"><img src="img/logo-black.png"
                        alt=""></a></div>
            <div class="navigation__right">
                <ul class="menu">
                    <li class="current-menu-item menu-item-has-children"><a href="#">Home</a><span class="sub-toggle"><i
                                class="fa fa-angle-down"></i></span>
                        <ul class="sub-menu">
                            <li><a href="index.html">Homepage</a></li>

                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="#">Shop</a><span
                            class="sub-toggle"><i class="fa fa-angle-down"></i></span>
                        <ul class="sub-menu">
                            <li><a href="product-left-sidebar.html">Book List</a></li>
                            <li><a href="product-detail.php">Book Detail</a></li>

                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="#">Pages</a><span class="sub-toggle"><i
                                class="fa fa-angle-down"></i></span>
                        <ul class="sub-menu">
                            <li><a href="cart.html">Shopping Cart</a></li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="register.html">Register</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="#">Profile</a><span
                            class="sub-toggle"><i class="fa fa-angle-down"></i></span>
                        <ul class="sub-menu">
                            
                            <li><a href="profile.php">Profile</a></li>
                            <li><a href="record.php">Purchase Record</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <nav class="navigation--sidebar">
        <ul class="menu">
            <li class="current-menu-item menu-item-has-children"><a href="#">Home</a><span class="sub-toggle"><i
                        class="fa fa-angle-down"></i></span>
                <ul class="sub-menu">
                    <li><a href="index.html">Homepage</a></li>

                </ul>
            </li>
            <li class="menu-item-has-children"><a href="#">Shop</a><span class="sub-toggle"><i
                        class="fa fa-angle-down"></i></span>
                <ul class="sub-menu">
                    <li><a href="product-left-sidebar.html">Book List</a></li>
                    <li><a href="product-detail.php">Book Detail</a></li>

                </ul>
            </li>
            <li class="menu-item-has-children"><a href="#">Pages</a><span class="sub-toggle"><i
                        class="fa fa-angle-down"></i></span>
                <ul class="sub-menu">
                    <li><a href="cart.html">Shopping Cart</a></li>
                    <li><a href="login.html">Login</a></li>
                    <li><a href="register.html">Register</a></li>
                </ul>
            </li>
            <li class="menu-item-has-children"><a href="#">Profile</a><span class="sub-toggle"><i
                        class="fa fa-angle-down"></i></span>
                <ul class="sub-menu">
                    
                            <li><a href="profile.php">Profile</a></li>
                            <li><a href="record.php">Purchase Record</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div class="ps-breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="active">Book Detail</li>
            </ol>
        </div>
    </div>
    <div class="ps-page">
        <div class="container">
            <div class="ps-product--detail" data-type="default">
                <div class="row">
                    <div class="col-xl-7 col-lg-6 col-md-12 col-sm-12  ">
                        <div class="ps-product__thumbnail" data-vertical="true">
                            <div class="ps-product__gallery" data-arrow="true">
                                <div class="item"><a href="<?php echo $data["url"] ?>"><img
                                            src="<?php echo $data["url"] ?>" alt=""></a></div>
                                <!-- <div class="item"><a href="img/products/detail/1_2.jpg"><img
                                            src="img/products/detail/1_2.jpg" alt=""></a></div>
                                <div class="item"><a href="img/products/detail/1_3.jpg"><img
                                            src="img/products/detail/1_3.jpg" alt=""></a></div>
                                <div class="item"><a href="img/products/detail/1_4.jpg"><img
                                            src="img/products/detail/1_4.jpg" alt=""></a></div>
                                <div class="item"><a href="img/products/detail/1_5.jpg"><img
                                            src="img/products/detail/1_5.jpg" alt=""></a></div> -->
                            </div>
                            <div class="ps-product__preview">
                                <div class="ps-product__variants" data-item="4" data-md="3" data-sm="3"
                                    data-arrow="false">
                                    <!-- <div class="item"><img src="img/products/detail/1_1.jpg" alt=""></div>
                                    <div class="item"><img src="img/products/detail/1_2.jpg" alt=""></div>
                                    <div class="item"><img src="img/products/detail/1_3.jpg" alt=""></div>
                                    <div class="item"><img src="img/products/detail/1_4.jpg" alt=""></div>
                                    <div class="item"><img src="img/products/detail/1_5.jpg" alt=""></div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12  ">
                        <div class="ps-product__info">
                            <h1><?php echo $data["bookname"] ?></h1>
                            <h4 class="ps-product__price"><span>On sell: RM</span><?php echo $data["price"] ?><br><span>On rent: RM</span><?php echo $data["rent_rate"] ?> per day</h4>
                            <div class="ps-product__desc">
                                <ul>
                                    <li>Genre: <?php echo $data["genre"] ?></li>
                                    <li>Author: <?php echo $data["author"] ?></li>
                                    <li>Publisher: <?php echo $data["publisher"] ?></li>
                                </ul>
                            </div>
                            <figure>
                                <figcaption>Qty</figcaption>
                                <div class="ps-product__shopping">
                                    <div class="ps-form--number"><span class="ps-form__up"><i
                                                class="fa fa-angle-up"></i></span><span class="ps-form__down"><i
                                                class="fa fa-angle-down"></i></span>
                                        <input class="form-control" type="text" placeholder="" value="1">
                                    </div>
                                </div>
                            </figure>
                            <div class="ps-product__shopping">
                                <button class="ps-btn ps-btn--black text-uppercase" onclick=func(<?php echo $_GET['x'];?>) >+ Add to cart</button>
                            </div>
                            <!-- <div class="ps-product__specification">
                                <p><strong>Categories:</strong><a href="product-listing.html"></a>,<a
                                        href="product-listing.html"> Clothing</a>,<a href="product-listing.html">
                                        Demin</a>,<a href="product-listing.html"> Shoes</a><a
                                        href="product-listing.html"> Accessories</a></p>
                            </div> -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="ps-footer">
            <div class="ps-footer__copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12  "><a class="ps-logo" href="index.html"><img
                                    src="img/logo-black.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div id="back2top"><i class="fa fa-angle-up"></i></div>
        <div id="loader-wrapper"><img src="img/loading.png" alt="">
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>
        <div class="ps-search" id="site-search"><a class="ps-btn--close" href="#"></a>
            <div class="ps-search__content">
                <form class="ps-form--primary-search" action="do_action" method="post">
                    <input class="form-control" type="text" placeholder="Type your keyword...">
                    <button><i class="aroma-magnifying-glass"></i></button>
                </form>
            </div>
        </div>
        
  <div>
    <form id="myForm" action="php/addToCart.php" method="GET">
      <input hidden id="data" type="text" name="x" value="">
      <br><br>
      <input hidden type="submit" value="Submit">
    </form>
  </div>

        <!-- Plugins-->
        <script src="plugins/jquery-1.12.4.min.js"></script>
        <script src="plugins/selectize/dist/js/standalone/selectize.min.js"></script>
        <script src="plugins/plugins.min.js"></script>
        <!-- Custom scripts-->
        <script src="js/main.js"></script>
        <script
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDxflHHc5FlDVI-J71pO7hM1QJNW1dRp4U&amp;region=GB"></script>
</body>

<script>
function func (bookid){
    document.getElementById("data").value = bookid;
    document.getElementById("myForm").submit();
}
</script>

</html>