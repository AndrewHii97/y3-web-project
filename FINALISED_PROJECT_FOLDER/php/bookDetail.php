<?php
session_start();
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$conn = new mysqli("localhost", "root", "", "brsp");
$sql="SELECT bookname,genre,author,publisher,ROUND(price,2) AS price,rent_rate,bookownerid,url FROM book WHERE bookid = '".$_GET["x"]."'";
// echo $sql;
//check if any result returned
$result =$conn->query($sql);

if(!$result){
	echo "failed";
    }		
$data = $result->fetch_assoc();
// echo $data["price"];
// echo "<br>bookid: ".$data["bookname"];
$conn->close();
?>


<html>
<head>
	<meta charset="utf-8">
	<title>Book Detail</title>
</head>
<body>
	
<?php
// Echo session variables that were set on previous page
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
?>
	<!-- <br>Home/BookStore/BookName -->
	<div id="book">
		<img id="img" src="../<?php echo $data["url"] ?>"><br>
		Name: <?php echo $data["bookname"] ?><br>
		Author: <?php echo $data["author"] ?><br>
		Price: RM<?php echo $data["price"] ?><br>
	</div>

	<div>
    <form id="myForm" action="" method="GET">
      <input id="data" type="text" name="x" value="">
      <br><br>
      <input type="submit" value="Submit">
    </form>
  </div>

  
</body>
</html>