<?php
    session_start();
    header("Content-Type: application/json; charset=UTF-8");
    $obj = json_decode($_GET["x"], true);

    $servername = "localhost";
    $username="root";
    $password="";
    $dbname="brsp";
    $userid = $_SESSION["id"];
    //Create connection
    $conn = new mysqli($servername,$username,$password,$dbname);

    print_r($obj);

    //Check connection
    if($conn->connect_error){
        die("Connection failed:".$connect->connect_error);
    }

    $Date = date("Y-m-d");
    echo gettype($Date);

    $sql = "INSERT INTO payment(USERID, PAYMENT_AMOUNT,PAYMENT_DATE) VALUES ($userid, $obj[0], '".$Date."') ";
    $conn->query($sql);

    $sql = "SELECT PAYMENTID FROM payment ORDER BY PAYMENTID DESC LIMIT 1";
    //check if any result returned
    $result = $conn->query($sql);
    if (!$result)
    {
        echo "failed";
    }
    $outp = mysqli_fetch_all($result, MYSQLI_ASSOC);
    $paymentID = (int)$outp[0]['PAYMENTID'];

    $bookID = (int)$obj[1]['bookid'];
    for($i=1; $i<count($obj); $i++){
        $sql2 = "SELECT PRICE FROM book WHERE BOOKID = $bookID";
        //check if any result returned
        $result = $conn->query($sql2);
        if (!$result)
        {
            echo "failed";
        }
        $bookPrice = mysqli_fetch_all($result, MYSQLI_ASSOC);
        $buyPrice = (int)$bookPrice[0]['PRICE'];
        
        if(strcmp($obj[$i]['state'],"Buy") == 0){
            $sql3 = "INSERT INTO bookbuy(BOOKID, PAYMENTID, USERID, SELL_PRICE) VALUES ($bookID, $paymentID, $userid, $buyPrice)";
        } else {
            $sql3 = "SELECT RENT_RATE FROM book WHERE BOOKID = $bookID";
            //check if any result returned
            $result1 = $conn->query($sql3);
            if (!$result)
            {
                echo "failed";
            }
            $rentRate = mysqli_fetch_all($result1, MYSQLI_ASSOC);
            $rate = (float)$rentRate;
            $rentPrice = $rate * 7;

            $returnDate = date('Y-m-d', strtotime($Date. ' + 7 days'));

            $sql3 = "INSERT INTO bookrent(BOOKID, USERID, PAYMENTID, RENT_DATE, RETURNED_DATE, RENT_PRICE, RENT_RATE) VALUES ($bookID, $userid, $paymentID, '".$Date."', '".$returnDate."', $rentPrice, $rate)";
        }
        $conn->query($sql3);
    }

    $sql4 = "DELETE FROM cart WHERE USERID = $userid";
    $conn->query($sql4);

    $conn->close();

?>