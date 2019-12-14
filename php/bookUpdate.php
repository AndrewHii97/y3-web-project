<?php

    if(isset($_POST['bookid']) ){
        $bookId = $_POST['bookid'];
        echo "update book by allowing edit $bookId ";
    }else{
        echo "create a new book add form here";
    }
 
?>