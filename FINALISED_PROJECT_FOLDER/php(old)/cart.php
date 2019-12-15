<?php   session_start();
        header("Content-Type: application/json; charset=URF-8");
        $servername = "localhost";
        $username="root";
        $password="";
        $dbname="brsp";


        $name = $_SESSION["id"];
        
        //Create connection
        $conn = new mysqli($servername,$username,$password,$dbname);

        //Check connection
        if($conn->connect_error){
            die("Connection failed:".$connect->connect_error);
        }
        //fetch data with prepared statement 
        //mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $statement = $conn->prepare("SELECT DISTINCT book.*, ow.USERNAME,ow.CLIENTID FROM account ow inner join(book inner join (account acc inner join cart c on acc.userid = 
        c.userid) on book.bookid = c.bookid) on ow.userid = book.bookownerid where acc.userid=? ");
        $statement->bind_param("i", $name);  
        
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
        // if($result->num_rows> 0){
        //     //fetch data as object
        //     while($obj = $result->fetch_object()){
        //         //push the data in to the array 
        //         array_push($items,$obj);
        //     }
        // }
        $items = $result->fetch_all(MYSQLI_ASSOC);
        // print_r($items);
    //    print_r(json_encode($items));
        // echo json_decode(json_encode($items));
        // $json = json_encode($items);
        echo json_encode($items);
        // echo $json; 
?>

