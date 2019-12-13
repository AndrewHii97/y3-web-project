<?php   
    
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

        $obj = json_decode($_POST["x"], false);

        $statement = $conn->prepare("DELETE FROM cart where bookid =? and userid=? ");
        $statement-> bind_param("ii",$obj->BookId,$obj->UserId);
        $statement-> execute();
        if($statement){
            echo "successful";
        }
        //$result =$statement-> get_result();
        //$item = $result->fetch_object();
       
?>