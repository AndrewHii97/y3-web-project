<!DOCTYPE html>
<!-- redirecting to the login page if not yet login and no seesion is set  -->
<?php
// if(session_id=="" or !isset($_SESSION)) {
//     header('Location:../html/login.html?message="Please_login_first" ');
//     exit();
// }else{
    // session_start();
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
                // $id="2";
                //Create connection
                $conn = new mysqli($servername,$username,$password,$dbname);
    
                //Check connection
                if($conn->connect_error){
                    die("Connection failed:".$connect->connect_error);
                }
                // $file_tmp= $_FILES['image']['tmp_name'];
        
                // $file_name= $_FILES['image']['name'];
           
                // define('PREFIX',"../src/");
                // $bookURL = "src/".$file_name;
                // move_uploaded_file($file_tmp,PREFIX.$file_name);
                $username = $_POST['username'];
                $email =$_POST['email'];
                $contact =$_POST['contact'];
                $address = $_POST['address'];
                $password =$_POST['password'];
                
                echo "$username,$email,$contact,$address,$password";

                // $statement = $conn->prepare("INSERT INTO book (BOOKNAME, GENRE, AUTHOR, PUBLISHER, PRICE, RENT_RATE, BOOKOWNERID,URL) VALUES (?,?,?,?,?,?,?,?)");
                // $statement->bind_param("ssssddis",$bookName,$bookGenre,$bookAuthor,$bookPublisher,$bookPrice,$bookRentRate,$id,$bookURL);
                // $statement->execute();
                echo "<h2>book added succesfully</h2>";
                // login automatcially
                close();
                require ('authen_login.php');
            }
            
        ?>

        <form action="" method="post">
            <br>

            <label> username</label>
            <input required id='username' type='text' name='username'><br>  
            <br>
            <label >email</label>
            <input required id='email' type='text' name='email'><br>
            <label >contact</label>
            <input required id='contact' type='text' name='contact'><br>
            <label >address</label>
            <input required id='address' type='text' name='address'><br>
            <label >password</label>
            <input required id='password' type='text' name='password'><br>
            
            <input type='submit' name='add' value='add'>
        </form>
    </body>
</html>