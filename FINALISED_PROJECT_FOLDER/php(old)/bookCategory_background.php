<?php
header("Content-Type: application/json; charset=UTF-8");
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$conn = new mysqli("localhost", "root", "", "brsp");
$sql = "SELECT bookid, bookname, ROUND(price,2) AS price,url,clicks,timestamp FROM book";

if(!empty($_GET['x'])) {
  $sql = "SELECT bookid, bookname, ROUND(price,2) AS price,url,clicks,timestamp FROM book WHERE genre = '".$_GET["x"]."'";
}

//check if any result returned
$result = $conn->query($sql);

if (!$result)
{
    echo "failed";
}
$outp = mysqli_fetch_all($result, MYSQLI_ASSOC);
// $count = mysqli_num_rows($result);
$conn->close();
// $outp[$count]=$count;
echo json_encode($outp);
?>
