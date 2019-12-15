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
<html>

<head>
    <title>Book Record</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../css/profile.css" />
</head>
<body>
    <!-- Start of BannerBox -->
    <section id="BannerBox">
        <img id="logo" src="../src/logo_A1_Rectangle_4_pattern.png" alt="logo.png">
        <div class="NaviGroup">
            <div class="NaviBtn">
                <img src="../src/book_icon_A1_Rectangle_15_pattern.png" alt="book_icon.png">
            </div>
            <div class="NaviBtn">
                <img src="../src/cart_A1_Rectangle_13_pattern.png" alt="src/cart_icon.png">
            </div>
            <div class="NaviBtn">
                <img src="../src/login_avatar_A1_Rectangle_11_pattern.png" alt="login_cion.png">
            </div>
        </div>
    </section>
    <!-- end of the BannerBox -->

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

    <table id="bookOwned">
        <caption><h1><b>Books Owned</b></h1></caption>
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
            define('PREFIX','..\\');
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


    <!-- table for book rented -->
    <?php
        
        $id="2";
        $sql=  
        "select b.BOOKID,b.BOOKNAME,b.GENRE,b.AUTHOR,b.PUBLISHER,b.url,acc.username, acc.contact,acc.email,acc.address,
        br.RENT_DATE,br.RETURNED_DATE,br.RENT_PRICE,br.RENT_RATE from  
        bookrent as br join (book as b join account as acc on  b.bookownerid =acc.userid) 
        on br.BOOKID = b.BOOKID where br.userid='$id'";
        $result = $conn->query($sql);
        $books = $result->fetch_all($resulttype = MYSQLI_ASSOC);

    ?>

    <table>
        <caption><h1><b>The book I rented</b><h1></caption>
        <tr>
            <th>BookImage</th>
            <th>BookName</th>
            <th>BookOwner</th>
            <th>Contact</th>
            <th>Address</th>
            <th>Email</th>
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
                $bookOwnerContact = $book['contact'];
                $bookOwnerAddress = $book['address'];
                $bookOwnerEmail =$book['email'];
                $return = $book['RENT_DATE'];
                $rent = $book['RETURNED_DATE'];
                $rentPrice = $book['RENT_PRICE'];

                echo " 
                <tr>
                    <td><img width='50%' src='$bookURL' alt='$bookURL'></td>
                    <td>
                        <form method='post' action='bookDetail.php'>
                            <input type='hidden' name='bookid' value='$bookId'>
                            <input type='submit' value='$bookName'>
                        </form>  
                    </td> 
                    <td>$bookOwner</td>
                    <td>$bookOwnerContact</td>
                    <td>$bookOwnerAddress</td>
                    <Td>$bookOwnerEmail</td>
                    <td>RM $bookRentRate</td>
                    <th>$rent</th>
                    <th>$return</th>
                    <th>RM $rentPrice</th>
                </tr>
                ";

            }
           
        ?>
    </table>

    <table>
        <caption><b><h1>book sold<h1></b></caption>
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

    <button>Back</button>




    

    
</body>

</html>