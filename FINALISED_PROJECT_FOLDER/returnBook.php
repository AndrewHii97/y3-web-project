<!-- redirecting to the login page if not yet login and no seesion is set  -->
<?php
// if(session_id=="" or !isset($_SESSION)) {
//     header('Location:../html/login.html$message="Please_login_first" ');
//     exit();
// }else{
//     session_start();
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
    <link rel="stylesheet" href="css/record.css">

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
                    <li class="current-menu-item menu-item-has-children"><a href="#">Shop</a><span class="sub-toggle"><i
                                class="fa fa-angle-down"></i></span>
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
                <li><a href="Record.php">Purchase Record</a></li>
                <li class="active">Return Book</li>
            </ol>
        </div>
    </div>
        <?php
            //boiler plate code here 
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


            if($_SERVER['REQUEST_METHOD']=="POST"){

                // received code here 
                $bookId= $_POST['bookid'];
                $renterId= $_POST['renterid'];
                $sql = "UPDATE bookrent SET RETURNED=1 WHERE BOOKID='$bookId' and USERID='$renterId'";
                $conn->query($sql);
                echo " update successfull";

            }

            // $id = $_SESSION['id']; #get the user id from the session
            $id = 1; #stub
            $sql = "select acc.userid as renterid, acc.username as renterName, acc.EMAIL,acc.CONTACT,acc.ADDRESS, 
            b.bookid,b.bookname,b.url,brt.RENT_DATE,brt.RETURNED_DATE,brt.RENT_PRICE,brt.RENT_RATE,brt.RETURNED
            from account as acc join (book as b join bookrent as brt on b.bookid = brt.bookid) 
            on brt.userid = acc.userid where b.bookownerid = '$id' ";
            $result = $conn->query($sql);
            if($result){
                $books = $result->fetch_all($resulttype = MYSQLI_ASSOC);
            }
            
    

        ?>  
        <a id = "title">Book Lended</a>
        <table>
            <!-- click on bookName to move to bookDetail view  -->
            <tr>
                <th>book Image</th>
                <th>book Name</th>
                <th>Renter Name</th>
                <th>Renter Contact</th>
                <th>Renter Email</th>
                <th>Renter Address</th>
                <th>Rent Date</th>
                <th>Due Date</th>
                <th>Rent Price</th>
                <th>Rent Rate</th>
            </tr>
            <?php
            define('PREFIX','');
            #insert book here 
            if($result){
                foreach( $books as $book){

                    #extract data 
                    $renterId = $book['renterid'];
                    $renterName = $book['renterName'];
                    $renterContact = $book['CONTACT'];
                    $renterEmail = $book['EMAIL'];
                    $renterAddress = $book['ADDRESS'];
                    $bookId = $book['bookid'];
                    $bookName = $book['bookname'];
                    $bookUrl =  PREFIX.$book['url'];
                    $bookRentDate = $book['RENT_DATE'];
                    $bookReturnDate = $book['RETURNED_DATE'];
                    $bookRentPrice = $book['RENT_PRICE'];
                    $bookRentRate = $book['RENT_RATE'];
                    $bookReturned = $book['RETURNED'];
    
                    
                    if(!$bookReturned){
                        echo
                            "<tr>
                                <td><img width='50px' alt='$bookUrl' src='$bookUrl'></td>
                                <td>$bookName</td>
                                <td>$renterName</td>
                                <td>$renterContact</td>
                                <td>$renterEmail</td>
                                <td>$renterAddress</td>
                                <td>$bookRentDate</td>
                                <td>$bookReturnDate</td>
                                <td>RM $bookRentPrice </td>
                                <td>$bookRentRate</td>
                                <td>
                                    <form method='post' action=''>
                                        <input type='hidden' name='renterid' value ='$renterId'>
                                        <input type='hidden' name='bookid' value='$bookId'> 
                                        <input type='submit' value='Returned'>
                                    </form>
                                <td>
                            </tr>
                            ";
                    }
                    
                }
            }
            
        ?>
        </table>
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