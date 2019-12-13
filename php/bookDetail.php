<?php
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
	<!-- <br>Home/BookStore/BookName -->
	<div id="book">
		<img id="img" src="<?php echo $data["url"] ?>"><br>
		Name: <?php echo $data["bookname"] ?><br>
		Author: <?php echo $data["author"] ?><br>
		Price: RM<?php echo $data["price"] ?><br>
	</div>

</body>
</html>
<!-- ajax -->
<!-- <script>
var obj, xmlhttp, myObj, x, txt = "";

obj = {"bookname":"book2"};
// console.log(obj);
dbParam = JSON.stringify(obj);
xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
  	console.log(this.responseText);
    myObj = JSON.parse(this.responseText);
    console.log(myObj);
    // document.getElementById("demo").innerHTML = txt;
    //book1
  	// document.getElementById("bookname").innerHTML=myObj[0].bookname;
   //  document.getElementById("price").innerHTML="Price: RM"+myObj[0].price;
   //  document.getElementById("img").src=myObj[0].url;
   //  document.getElementById("author").innerHTML=myObj[0].url;

  }
};
xmlhttp.open("POST", "bookDetail.php", true);
xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
// xmlhttp.send();
xmlhttp.send("x=" + dbParam);
</script>
 -->
