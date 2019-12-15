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
        <title>addBook</title>
    </head>
    <body>
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
           
                define('PREFIX',"../src/");
                $bookURL = "src/".$file_name;
                move_uploaded_file($file_tmp,PREFIX.$file_name);
                $bookName = $_POST['bookname'];
                $bookGenre =$_POST['bookgenre'];
                $bookAuthor =$_POST['bookauthor'];
                $bookPublisher = $_POST['bookpublisher'];
                $bookPrice =$_POST['bookprice'];
                $bookRentRate =$_POST['bookrentrate'];
                
                echo "$bookName,$bookGenre,$bookAuthor,$bookPublisher,$bookPrice,$bookRentRate,$bookURL";

                $statement = $conn->prepare("INSERT INTO book (BOOKNAME, GENRE, AUTHOR, PUBLISHER, PRICE, RENT_RATE, BOOKOWNERID,URL) VALUES (?,?,?,?,?,?,?,?)");
                $statement->bind_param("ssssddis",$bookName,$bookGenre,$bookAuthor,$bookPublisher,$bookPrice,$bookRentRate,$id,$bookURL);
                $statement->execute();
                echo "<h2>book added succesfully</h2>";
            }
            
        ?>
        <img alt="image here " width="50%" height="50%">
        <form action="" method="post" enctype="multipart/form-data">
            <br>
            <label for='bookImage'></label>
            <input required id='bookimage' type="file" name="image" accept="image/*"><br>
            <label for='bookname'>BookTitle</label>
            <input required id='bookname' type='text' name='bookname'><br>
            <label for='genre'>Genre</label>
            <select required id="genre" name='bookgenre'>
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
            <br>
            <label for='author'>Author</label>
            <input required id='author' type='text' name='bookauthor'><br>
            <label for='publisher'>Publisher</label>
            <input required id='publisher' type='text' name='bookpublisher'><br>
            <label for='price'>Price</label>
            <input required id='price' type="number" name='bookprice' step="0.01" min="0"><br>
            <label for='rentrate'>Rent Rate</label>
            <input required id='rentrate' type='number' name='bookrentrate' step="0.01" min="0"><br>
            <input type='submit' name='add' value='add'>
        </form>
    </body>
</html>