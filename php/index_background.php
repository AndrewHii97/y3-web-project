<?php
header("Content-Type: application/json; charset=UTF-8");
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$conn = new mysqli("localhost", "root", "", "brsp");
$sql = "SELECT bookid, bookname, ROUND(price,2) AS price,url,clicks,timestamp FROM book ORDER BY clicks DESC LIMIT 4";

//check if any result returned
$result = $conn->query($sql);

if (!$result)
{
    echo "failed";
}
$outp = mysqli_fetch_all($result, MYSQLI_ASSOC);
$conn->close();

echo json_encode($outp);
?>
