<!DOCTYPE html>
<!-- redirecting to the login page if not yet login and no seesion is set  -->
<?php
// if(session_id=="" or !isset($_SESSION)) {
//     header('Location:../html/login.html$message="Please_login_first" ');
//     exit();
// }else{
//     session_start();
// }
?>
<html>
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
    <body>
        <?php
            $servername = "localhost";
            $username="root";
            $password="";
            $dbname="brsp";
            //Create connection
            $conn = new mysqli($servername,$username,$password,$dbname);
            //Check connection
            if($conn->connect_error){
                die("Connection failed:".$connect->connect_error);
            }
            define("PREFIX","");
            if( isset($_POST['bookid']) and $_SERVER['REQUEST_METHOD']=="POST" and !isset($_POST['edit']) ){
    
                $bookid = $_POST['bookid'];
                //boiler plate code here 
                $sql = "SELECT * FROM book WHERE book.bookid = '$bookid'";
                $result = $conn->query($sql);
                $book = $result->fetch_assoc();  
                //print_r($book);
                $bookId = $book['BOOKID'] ;
                $bookName = $book['BOOKNAME'] ;
                $bookGenre = $book['GENRE'] ;
                $bookAuthor = $book['AUTHOR'] ;
                $bookPublisher = $book['PUBLISHER'] ;
                $bookPrice = $book['PRICE'] ;
                $bookRentRate =$book['RENT_RATE'] ;
                $bookURL = PREFIX.$book['URL'];
            }else if(isset( $_POST['bookid']) and $_SERVER['REQUEST_METHOD']=='POST' and isset($_POST['edit'])){
              
                $bookid = $_POST['bookid'];
                $name = filter_var($_POST['bookname'],FILTER_SANITIZE_STRING);
                $genre = filter_var($_POST['bookgenre'],FILTER_SANITIZE_STRING);
                $author = filter_var( $_POST['bookauthor'],FILTER_SANITIZE_STRING);
                $publisher = filter_var($_POST['bookpublisher'],FILTER_SANITIZE_STRING);
                $price = $_POST['bookprice'];
                $rentrate = $_POST['bookrentrate'];
                echo "$bookid,$name,$genre,$author,$publisher,$price,$rentrate";
                $statement = $conn->prepare("UPDATE book SET
                BOOKNAME=?,GENRE=?,AUTHOR=?,PUBLISHER=?,PRICE=?,RENT_RATE=? WHERE BOOKID =? ");
                $statement->bind_param("ssssdds",$name,$genre,$author,$publisher,$price,$rentrate,$bookid);
                $statement->execute();
                //redirect to the book record page 
                header('Location: record.php');
                quit();
            }
 
        ?>

        
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
                            <li class="current-menu-item "><a href="product-detail.html">Product Detail</a></li>
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
                        alt=""></a>
            </div>
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
                            <li><a href="product-detail.html">Book Detail</a></li>

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
                    <li><a href="product-detail.html">Book Detail</a></li>

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
                <li class="active">Update Book</li>
            </ol>
        </div>
    </div>
        <form class="ps-form--account" action='bookUpdate.php' method='POST' style="text-align:center">
            <input type="hidden" name="bookid" value="<?php echo $bookId?>">
            <img alt="No image" src="<?php echo $bookURL ?>"  ><br>
        <div class="form-group">
            <label for='bookname'>BookTitle</label>
            <input class="form-control"  id='bookname' type='text' name='bookname' value='<?php echo $bookName ?>' ><br>
        </div>
        <div class="form-group">
            <label for='genre'>Genre</label>
            <select class="form-control"  id="genre" name='bookgenre'>
                <option <?php if($bookGenre=='Adventure'){echo "selected";} ?> value='Adventure'>Adventure</option>
                <option <?php if($bookGenre=='Fable'){echo "selected";} ?> value='Fable'>Fable</option>
                <option <?php if($bookGenre=='Fiction'){echo "selected";} ?> value='Fiction'>Fiction</option>
                <option <?php if($bookGenre=='Horror'){echo "selected";} ?> value='Horror'>Horror</option>
                <option <?php if($bookGenre=='Music') {echo "selected";} ?> value='Music'>Music</option>
                <option <?php if($bookGenre=='Parenting') {echo "selected";} ?> value='Parenting'>Parenting</option>
                <option <?php if($bookGenre=='Romance') {echo "selected";} ?> value='Romance'>Romance</option>
                <option <?php if($bookGenre=='Sci-Fi') {echo "selected";} ?> value='Sci-Fi'>Sci-Fi</option>
                <option <?php if($bookGenre=='Self-help'){ echo "selected";} ?> value='Self-Help'>Self-Help</option>
                <option <?php if($bookGenre=='Suspense'){ echo "selected";} ?> value='Suspense'>Suspense</option>
            </select>
        </div>
        <div class="form-group">

            <br>
            <label for='author'>Author</label>
            <input class="form-control"  id='author' type='text' name='bookauthor' value='<?php echo $bookAuthor ?>'><br>
            
            </div>
            <div class="form-group">

            <label for='publisher'>Publisher</label>
            <input class="form-control"  id='publisher' type='text' name='bookpublisher' value='<?php echo $bookPublisher ?>'><br>
            </div>
            <div class="form-group">

            <label for='price'>Price</label>
            <input class="form-control"  id='price' type="number" name='bookprice' step="0.01" min="0" value='<?php echo $bookPrice ?>'><br>
            </div>
            <div class="form-group">


            <label for='rentrate'>Rent Rate</label>
            <input class="form-control"  id='rentrate' type='number' name='bookrentrate' step="0.01" min="0" value='<?php echo $bookRentRate ?>'><br>
            </div>
            <div class="form-group">
            <input class="ps-btn ps-btn--outline ps-btn--black" type='submit' name='edit' value='edit'>
            </div>

        </form>
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
        <!-- Plugins-->
        <script src="plugins/jquery-1.12.4.min.js"></script>
        <script src="plugins/selectize/dist/js/standalone/selectize.min.js"></script>
        <script src="plugins/plugins.min.js"></script>
        <!-- Custom scripts-->
        <script src="js/main.js"></script>
        <script
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDxflHHc5FlDVI-J71pO7hM1QJNW1dRp4U&amp;region=GB"></script>
    </body>
</html>