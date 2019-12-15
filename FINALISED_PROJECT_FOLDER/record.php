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
                <li class="active">Purchase Record</li>
                <li><a href="returnBook.php">Return Book</a></li>
            </ol>
        </div>
    </div>

    <!-- insert code here-->
    <div>
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

        $deleteMessage=null;

        if($_SERVER['REQUEST_METHOD']=="POST"){

            $deleteId= $_POST['bookid'];
            $sql = "DELETE FROM `book` WHERE bookid=$deleteId";
            $conn->query($sql);
            $deleteMessage="book deleted successfully";
            
        }

        // $id = $_SESSION['id']; #get the user id from the session
        $id = 2; #stub
        $sql = "SELECT * FROM book WHERE bookownerid='$id' ";
        $result = $conn->query($sql);
        $books = $result->fetch_all($resulttype = MYSQLI_ASSOC);
        
    ?>
    <?php
        if(!is_null($deleteMessage) ){
            echo "$deleteMessage";
        }
    ?>

    <a id = "title" >Books Owned</a>
    <table id="bookOwned">
        <tr>
            <th>Book</th>
            <th>Book Name</th> 
            <th>Genre</th>
            <th>Author</th>
            <th>Publisher</th>
            <th>Price</th>
            <th>Rent_Rate</th>
            <th>Modified</th>
            <th></th>
            <th></th>
        </tr>

        <?php
            define('PREFIX','');
            #insert book here 
            foreach( $books as $book){
                
                $bookId=$book['BOOKID'];
                $bookURL=PREFIX.$book['URL'];
                $bookName=$book['BOOKNAME'];
                $bookGenre=$book['GENRE'];
                $bookAuthor=$book['AUTHOR'];
                $bookPublisher=$book['PUBLISHER'];
                $bookPrice=$book['PRICE'];
                $bookRentRate=$book['RENT_RATE'];
                $bookModified=$book['TIMESTAMP'];
                
                //please style the button so it look like a link not a button 
                echo
                "<tr>
                    <td><img width='30%'  alt='$bookURL' src='$bookURL'></td>
                    <td>
                        <form method='post' action='bookUpdate.php'>
                            <input type='hidden' name='bookid' value='$bookId'>
                            <input type='submit' value='$bookName'>
                        </form>  
                    </td> 
                    <td>$bookGenre</td>
                    <td>$bookAuthor</td>
                    <td>$bookPublisher</td>
                    <td>RM $bookPrice</td>
                    <td>RM $bookRentRate</td>
                    <td>$bookModified</td>
                    <td>
                        <form method='post' action=''>
                            <input type='hidden' name='bookid' value='$bookId'> 
                            <input type='submit' value='X'>
                        </form>
                    <td>
                </tr>
                ";
            }
        ?>
    </table>
    <button><a href="addBook.php">Add Book</a></button>
    </div>

    <div>

    <!-- table for book rented -->
    <?php
        
        $id="2";
        $sql=  
        "select b.BOOKID,b.BOOKNAME,b.GENRE,b.AUTHOR,b.PUBLISHER,b.url,acc.username, 
        br.RENT_DATE,br.RETURNED_DATE,br.RENT_PRICE,br.RENT_RATE from  
        bookrent as br join (book as b join account as acc on  b.bookownerid =acc.userid) 
        on br.BOOKID = b.BOOKID where br.userid='$id'";
        $result = $conn->query($sql);
        $books = $result->fetch_all($resulttype = MYSQLI_ASSOC);

    ?>
    <a id = "title">Book Rented</a>
    <table>
        <tr>
            <th>BookImage</th>
            <th>BookName</th>
            <th>BookOwner</th>
            <th>BookRentRate</th>
            <th>BorrowDate</th>
            <th>DueDate</th>
            <th>RentPrice</th>
        </tr>
        <?php
            foreach( $books as $book ){
                #retrive information from the array 
                $bookId = $book['BOOKID'];
                $bookName =  $book['BOOKNAME'];
                $bookAuthor = $book['AUTHOR'];
                $bookGenre = $book['PUBLISHER'];
                $bookRentRate = $book['RENT_RATE'];
                $bookURL = PREFIX.$book['url'];
                $bookPublisher =$book['PUBLISHER'];
                $bookOwner =$book['username'];
                $return = $book['RENT_DATE'];
                $rent = $book['RETURNED_DATE'];
                $rentPrice = $book['RENT_PRICE'];

                echo " 
                <tr>
                    <td><img width='50%' src='$bookURL' alt='$bookURL'></td>
                    <td>
                        <form method='post' action='bookDetail.php'>
                            <input type='hidden' name='bookid' value='$bookId'>

                            <input type='submit' class='form-group submit' value='$bookName'>
                        </form>  
                    </td> 
                    <td>$bookOwner</td>
                    <td>RM $bookRentRate</td>
                    <th>$rent</th>
                    <th>$return</th>
                    <th>RM $rentPrice</th>
                </tr>
                ";

            }
           
        ?>
    </table>
    </div>
    <div>
    <a id = "title">Book Sold</a>
    <table>
        <tr>
            <th>bookImage</th>
            <th>bookName</th>
            <th>bookPrice</th>
        </tr>
        <?php
            $sql = "SELECT b.BOOKID,b.URL,b.BOOKNAME,bb.SELL_PRICE FROM 
            bookbuy as bb join book as b on b.BOOKID = bb.BOOKID WHERE b.BOOKOWNERID='$id'";
            $result = $conn->query($sql);
            $books = $result->fetch_all($resulttype = MYSQLI_ASSOC);

            foreach($books as $book ){
                $bookId = $book['BOOKID'];
                $bookName =  $book['BOOKNAME'];
                $bookURL = PREFIX.$book['URL'];
                $sellPrice = $book['SELL_PRICE'];

                echo " 
                <tr>
                    <td><img width='50%' src='$bookURL' alt='$bookURL'></td>
                    <td>$bookName</td>
                    <th>RM $sellPrice</th>
                </tr>
                ";
            }      
        ?>
    </table>
    <div>




    <!-- table until here-->
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