<?php   
        //header("Content-Type: application/json; charset=URF-8");
        $servername = "localhost";
        $username="root";
        $password="";
        $dbname="brsp_schema";


        $name ="sad";
        //Create connection
        $conn = new mysqli($servername,$username,$password,$dbname);

        //Check connection
        if($conn->connect_error){
            die("Connection failed:".$connect->connect_error);
        }
        //fetch data with prepared statement 
        //mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $statement = $conn->prepare("SELECT DISTINCT book.*, ow.USERNAME FROM account ow inner join(book inner join (account acc inner join cart c on acc.userid = 
        c.userid) on book.bookid = c.bookid) on ow.userid = book.bookownerid where acc.username=? ");
        $statement->bind_param("s", $name);  
        
        $statement->execute();
        $result = $statement->get_result();
        
        //fetch data with normal query  

        /*
         //create sql query
        $sql = "select DISTINCT book.* from (account inner join (book inner join cart on book.BOOKID = 
         cart.BOOKID)on account.USERID = cart.USERID) where account.username='".$name."'";
        
        //check if any result returned
        $result =$conn->query($sql);
        if(!$result){
            echo "failed";
        }
        
        */

        //fetch as one associative array 
        $items =[];
        if($result->num_rows> 0){
            //fetch data as object
            while($obj = $result->fetch_object()){
                //push the data in to the array 
                array_push($items,$obj);
            }
        }
        $statement->close();
        $json = json_encode($items);
        $conn->close();
        echo $json;
?>

