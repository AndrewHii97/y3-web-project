<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>return Book</title>
    </head>
    <body>
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
            $sql = "select acc.userid as renterid, acc.username as renterName, 
            b.bookid,b.bookname,b.url,brt.RENT_DATE,brt.RETURNED_DATE,brt.RENT_PRICE,brt.RENT_RATE,brt.RETURNED
            from account as acc join (book as b join bookrent as brt on b.bookid = brt.bookid) 
            on brt.userid = acc.userid where b.bookownerid = '$id' ";
            $result = $conn->query($sql);
            $books = $result->fetch_all($resulttype = MYSQLI_ASSOC);

        ?>  
        <table>
            <!-- click on bookName to move to bookDetail view  -->
            <caption><b>The book others borrowed from you</b></caption><br>
            <tr>
                <th>book Image</th>
                <th>book Name</th>
                <th>Rent Date</th>
                <th>Due Date</th>
                <th>Rent Rate</th>
                <th>Rent Price</th>
            </tr>
            <?php
            define('PREFIX','..\\');
            #insert book here 
            foreach( $books as $book){

                #extract data 
                $renterId = $book['renterid'];
                $renterName = $book['renterName'];
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
                            <td>$bookRentDate</td>
                            <td>$bookReturnDate</td>
                            <td>RM $bookRentPrice </td>
                            <td>RM $bookRentRate</td>
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
        ?>
        </table>
    </body>
</html>