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
         $dbname="brsp_schema";

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
        <caption>Books Owned</caption>
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
                    <td><img width='50%'  alt='img.png' src='$bookURL'></td>
                    <td>
                        <form method='post' action='bookUpdate.php'>
                            <input type='hidden' name='bookid' value='$bookId'>
                            <input type='submit' value='$bookName'>
                        </form>  
                    </td> 
                    <td>$bookGenre</td>
                    <td>$bookAuthor</td>
                    <td>$bookPublisher</td>
                    <td>$bookPrice</td>
                    <td>$bookRentRate</td>
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

    <button><a href="bookUpdate.php">Add Book</a></button>



    

    
</body>

</html>