<?php
session_start();
// header("Content-Type: application/json; charset=UTF-8");
header('Location:../index.html');
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$conn = new mysqli("localhost", "root", "", "brsp");

$sql = "INSERT INTO cart VALUES (".$_GET['x'].",".$_SESSION['id'].")";
echo $sql;
$conn->query($sql);

$conn->close();


?>
