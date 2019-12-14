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
        <title>BookUpdate</title>
        <sript src="../js/bookUpdate.js"></script>
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


            define("PREFIX","../");


            if( isset($_POST['bookid']) and $_SERVER['REQUEST_METHOD']=="POST" and !isset($_POST['edit']) ){
    
                $bookid = $_POST['bookid'];
                //boiler plate code here 
                $sql = "SELECT * FROM book WHERE book.bookid = '$bookid'";
                $result = $conn->query($sql);
                $book = $result->fetch_assoc();  
                print_r($book);
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
   
                // $bookId = "";
                // $bookName = "";
                // $bookGenre = "";
                // $bookAuthor ="";
                // $bookPublisher = "";
                // $bookPrice = "";
                // $bookRentRate ="";
                // $bookURL = "";


            
        ?>
        <form action="" method="POST">
            <input type="hidden" name="bookid" value="<?php echo $bookId?>">
            <img alt="No image" src="<?php echo $bookURL ?>"  ><br>
            <label for='bookname'>BookTitle</label>
            <input id='bookname' type='text' name='bookname' value='<?php echo $bookName ?>' ><br>
            <label for='genre'>Genre</label>
            <select id="genre" name='bookgenre'>
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
            <br>
            <label for='author'>Author</label>
            <input id='author' type='text' name='bookauthor' value='<?php echo $bookAuthor ?>'><br>
            <label for='publisher'>Publisher</label>
            <input id='publisher' type='text' name='bookpublisher' value='<?php echo $bookPublisher ?>'><br>
            <label for='price'>Price</label>
            <input id='price' type="number" name='bookprice' step="0.01" min="0" value='<?php echo $bookPrice ?>'><br>
            <label for='rentrate'>Rent Rate</label>
            <input id='rentrate' type='number' name='bookrentrate' step="0.01" min="0" value='<?php echo $bookRentRate ?>'><br>
            <input type='submit' name='edit' value='edit'>
        </form>
    </body>
</html>
