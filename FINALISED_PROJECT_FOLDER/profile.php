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
    <?php
        //php to handle form submission
        //variable for database connection
        $servername = "localhost";
        $username="root";
        $password="";
        $dbname="brsp";
        //echo $_SESSION['id'];
        $id = $_SESSION["id"];# obtain user id from session
        // $id = "2"; # stub 

        $conn = new mysqli($servername,$username,$password,$dbname);# establish database connection 
        #check if connection successfully established 
        if(!$conn){
            echo "<h1>fail to connect to database from server</h1>";
            exit();
        }

        if($_SERVER["REQUEST_METHOD"]=="POST"){
            
            $name =filter_var($_POST['full-name'], FILTER_SANITIZE_STRING);
            // $email = $_POST['email'];
            $address =filter_var($_POST['address'], FILTER_SANITIZE_STRING);
            $contact =filter_var($_POST['contact'], FILTER_SANITIZE_STRING);
            //$paypalNo = $_POST['paypal'];

            $statement = $conn->prepare("UPDATE account SET username=?, contact=?, address=? WHERE userid=?");
         
            $statement->bind_param("sssi", $name,$contact,$address,$id);
            $statement->execute();
        }

        $sql = "SELECT * FROM account WHERE userid='$id'";
        $result = $conn->query($sql); #sending query to database to obtain result 
        $user = $result->fetch_assoc();

        #$profileImageURL = $user['PROFILEURL'];
        $userName = $user['USERNAME'];
        $userEmail = $user['EMAIL'];
        $userContact = $user['CONTACT'];
        $userAddress = $user['ADDRESS'];
        // $payPal =$user['PAYPAL'];
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
                <li class="active">Profile</li>
            </ol>
        </div>
    </div>
    <div class="ps-page">
        <div class="ps-account">
            <div class="container">


                <form class="ps-form--account" action='profile.php' method='POST'>
                    <div class="ps-form__header">
                        <h3>Profile</h3>
                    </div>
                    <div class="ps-form__content">
                        <div class="form-group">
                            <label>Name <sup>*</sup></label>
                            <input class="form-control" name='full-name' type="text" placeholder="" value='<?php echo "$userName"  ?>' required>
                        </div>
                        <div class="form-group">
                            <label>Email <sup>*</sup></label>
                            <input class="form-control" readonly name='email' type="email" placeholder="" value='<?php echo "$userEmail" ?>' required>
                        </div>
                        <div class="form-group">
                            <label>Contact <sup>*</sup></label>
                            <input class="form-control"  name='contact'  type="text" placeholder="" value='<?php echo "$userContact" ?>' required>
                        </div>
                        <div class="form-group">
                            <label>Address <sup>*</sup></label>
                            <input class="form-control" name='address' type="text" placeholder="" value='<?php echo "$userAddress" ?>' required >
                        </div>
                        <div class="form-group">
                            <label>Paypal <sup>*</sup></label>
                            <input class="form-control"  name='paypal' type="text" placeholder="">
                        </div>
                        <div class="form-group submit">
                            <button class="ps-btn ps-btn--outline ps-btn--black">Edit</button>
                            <p><strong> or<a href="record.php"> Check Purchase Record</a></strong></p>
                        </div>
                    </div>
                </form>



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