<!-- redirecting to the login page if not yet login and no seesion is set  -->
<?php
// if(session_id=="" or !isset($_SESSION)) {
//     header('Location:../html/login.html$message="Please_login_first" ');
//     exit();
// }else{
    session_start();
// }
?>
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
                <li class="active">Add Book</li>
            </ol>
        </div>
    </div>
        <?php
            if( $_SERVER['REQUEST_METHOD']=='POST' ){
                $servername = "localhost";
                $username="root";
                $password="";
                $dbname="brsp";
                
                // $id = $_SESSION['id'];
                $id="2";
                //Create connection
                $conn = new mysqli($servername,$username,$password,$dbname);
    
                //Check connection
                if($conn->connect_error){
                    die("Connection failed:".$connect->connect_error);
                }
                $file_tmp= $_FILES['image']['tmp_name'];
        
                $file_name= $_FILES['image']['name'];
           
                define('PREFIX',"src/");
                $bookURL = "src/".$file_name;
                move_uploaded_file($file_tmp,PREFIX.$file_name);
                $bookName = $_POST['bookname'];
                $bookGenre =$_POST['bookgenre'];
                $bookAuthor =$_POST['bookauthor'];
                $bookPublisher = $_POST['bookpublisher'];
                $bookPrice =$_POST['bookprice'];
                $bookRentRate =$_POST['bookrentrate'];
                
                // echo "$bookName,$bookGenre,$bookAuthor,$bookPublisher,$bookPrice,$bookRentRate,$bookURL";

                $statement = $conn->prepare("INSERT INTO book (BOOKNAME, GENRE, AUTHOR, PUBLISHER, PRICE, RENT_RATE, BOOKOWNERID,URL) VALUES (?,?,?,?,?,?,?,?)");
                $statement->bind_param("ssssddis",$bookName,$bookGenre,$bookAuthor,$bookPublisher,$bookPrice,$bookRentRate,$id,$bookURL);
                $statement->execute();
                
                // header('Location:record.php');
                // echo "<h2>book added succesfully</h2>";
                // quit();
            }
            
        ?>
        <form class="ps-form--account" action='addBook.php' method='POST' enctype="multipart/form-data" style="text-align:center">
        <img  id="target" alt="image here " width="50%" height="50%">
        <div class="form-group">

            <label for='bookImage'></label>
            <input required id='src' type="file" name="image" accept="image/*">
        </div>
            <div class="form-group">
            <label for='bookname'>BookTitle</label>
            <input class="form-control" required id='bookname' type='text' name='bookname'>
        </div>
        <div class="form-group">

            <label for='genre'>Genre</label>
            <select class="form-control" required id="genre" name='bookgenre'>
                <option default value=""></option>
                <option value='Adventure'> Adventure</option>
                <option value='Fable'> Fable</option>
                <option value='Fiction'> Fiction</option>
                <option value='Horror'> Horror</option>
                <option value='Music'> Music</option>
                <option value='Parenting'> Parenting</option>
                <option value='Romance'> Romance</option>
                <option value='Sci-Fi'>Sci-Fi</option>
                <option value='Self-Help'> Self-Help</option>
                <option value='Suspense'>Suspense</option>
            </select>
            </div>
        <div class="form-group">

            <label for='author'>Author</label>
            <input class="form-control" required id='author' type='text' name='bookauthor'>
        </div>
         <div class="form-group">

            <label for='publisher'>Publisher</label>
            <input class="form-control" required id='publisher' type='text' name='bookpublisher'>
         </div>

            <div class="form-group">

            <label for='price'>Price</label>
            <input class="form-control" required id='price' type="number" name='bookprice' step="0.01" min="0">
        </div>
            <div class="form-group">

            <label for='rentrate'>Rent Rate</label>
            <input class="form-control" required id='rentrate' type='number' name='bookrentrate' step="0.01" min="0">
            </div>
            <div class="form-group">

            <input class="ps-btn ps-btn--outline ps-btn--black" type='submit' name='add' value='add'>
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
        <script>
         function showImage(src,target) {
              var fr=new FileReader();
              // when image is loaded, set the src of the image where you want to display it
                   fr.onload = function(e) { target.src = this.result; };
             src.addEventListener("change",function() {
             // fill fr with image data    
            fr.readAsDataURL(src.files[0]);
            });
        }
        var src = document.getElementById("src");
        var target = document.getElementById("target");
        showImage(src,target);
        </script>
    </body>
</html>