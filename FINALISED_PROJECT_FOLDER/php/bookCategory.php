<?php
session_start();
?>

<html>

<head>
  <meta charset="utf-8" />
  <title>BRSP</title>
</head>
<script>
function showHint(str) {
  if (str.length == 0) {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "getSearchResult.php?q=" + str, true);
    xmlhttp.send();
  }
}
</script>
<body>
  This is bookCategory of BRSP.
  <br>
  Navigation bar: <br>
  <a href="bookCategory.php">Book category</a>
  <br><a href="../html/cart2.html">cart</a><br>
  <a href="../html/login.html">login</a><br>
  Hi <?php echo $_SESSION['username']?>!<br>
  <a href="profile.php">profile</a><br>

  <br>
<p><b>Start typing a name in the input field below:</b></p>
<form>
First name: <input type="text" onkeyup="showHint(this.value)">
</form>
<p>Suggestions: <span id="txtHint"></span></p><br>

  BOOK CATEGORY<br>
  <span id="all" onclick="sendCategory('')">all</span>
  <span id="Adventure" onclick="sendCategory('Adventure')">Adventure</span>
  <span id="Fable" onclick="sendCategory('Fable')">Fable</span>
  <span id="Horror" onclick="sendCategory('Horror')">Horror</span>
  <span id="Music" onclick="sendCategory('Music')">Music</span>
  <span id="Parenting" onclick="sendCategory('Parenting')">Parenting</span>
  <span id="Romance" onclick="sendCategory('Romance')">Romance</span>
  <span id="Sci-Fi" onclick="sendCategory('Sci-Fi')">Sci-Fi</span>
  <span id="Self-Help" onclick="sendCategory('Self-Help')">Self-Help</span>
  <span id="Suspense" onclick="sendCategory('Suspense')">Suspense</span>

  <div id='content'>
</div>

<div id='scripting'>
</div>

<!-- 

  <div id="book1">

    <img id="img1" src="" onclick="sendForm(1)">
    <p id="bookname1"></p>
    <span id="price1"></span>
  </div>
  <div id="book2">
    <img id="img2" src="" onclick="sendForm(2)">
    <p id="bookname2"></p>
    <span id="price2"></span>
  </div>
  <div id="book3">
    <img id="img3" src="" onclick="sendForm(3)">
    <p id="bookname3"></p>
    <span id="price3"></span>
  </div>
  <div id="book4">
    <img id="img4" src="" onclick="sendForm(4)">
    <p id="bookname4"></p>
    <span id="price4"></span>
  </div> -->

  <div>
    <form id="myForm" action="bookDetail.php" method="GET">
      <input hidden id="data" type="text" name="x" value="">
      <br><br>
      <input hidden type="submit" value="Submit">
    </form>
  </div>


  <script>
    // var obj
    var xmlhttp, myObj, x, txt = "", dbParam;
    function sendForm(booknum) {
      document.getElementById("data").value = myObj[booknum - 1].bookid;
      document.getElementById("myForm").submit();
    }

    function sendCategory(cat) {
        var data = '?x=' + cat;
        callAjax(data);
    }
    function runScript(scriptContent) {
        var data = '?x=' + cat;
        callAjax(data);
    }

    // dbParam = JSON.stringify(obj);
    function callAjax(dbparam){
    xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        myObj = JSON.parse(this.responseText);
        console.log(myObj);
        console.log(myObj.length);
        var i;
        var content = '';
        for(i = 1; i < myObj.length+1; i++) {
          content += '<div id="book'+i+'"><img id="img'+i+'" src="" onclick="sendForm('+i+')"><p id="bookname'+i+'"></p><span id="price'+i+'"></span></div>'
          
        }
        i;
// console.log(content);
        var d1 = document.getElementById('content');
        d1.innerHTML = content;
        // d1.insertAdjacentHTML('afterend', 
        // '<div id="two">'+content+'</div>'
        // )


        var book = [];var price = [];var img = [];
        var o;

        for(o = 0; o<myObj.length;o++){
          book[o] = 'bookname' + (o+1).toString();
          price[o] = 'price' + (o+1).toString();
          img[o] = 'img' + (o+1).toString();
        }
        // console.log(book);
    var test = 'img1';
        var p;var scriptContent='';
        for(p=0;p<myObj.length;p++){
         scriptContent += 'document.getElementById("bookname'+(p+1)+'").innerHTML = myObj['+p+'].bookname;\ndocument.getElementById("price'+(p+1)+'").innerHTML = "Price: RM" + myObj['+p+'].price;\ndocument.getElementById("img'+(p+1)+'").src = "../" + myObj['+p+'].url;';
        }
        // console.log(scriptContent);
        var d2 = document.getElementById('scripting');
        d2.innerHTML = scriptContent;


        //book1
        document.getElementById("bookname1").innerHTML = myObj[0].bookname;
        document.getElementById("price1").innerHTML = "Price: RM" + myObj[0].price;
        document.getElementById(test).src = "../" + myObj[0].url;

        //book2
        document.getElementById("bookname2").innerHTML = myObj[1].bookname;
        document.getElementById("price2").innerHTML = "Price: RM" + myObj[1].price;
        document.getElementById("img2").src = "../" + myObj[1].url;

        //book3
        document.getElementById("bookname3").innerHTML = myObj[2].bookname;
        document.getElementById("price3").innerHTML = "Price: RM" + myObj[2].price;
        document.getElementById("img3").src = "../" + myObj[2].url;

        //book4 
        document.getElementById("bookname4").innerHTML = myObj[3].bookname;
        document.getElementById("price4").innerHTML = "Price: RM" + myObj[3].price;
        document.getElementById("img4").src = "../" + myObj[3].url;

      }
    };
    xmlhttp.open("GET", "bookCategory_background.php"+dbparam, true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send();
    // xmlhttp.send("x=" + dbParam);
    }


    callAjax('');
  </script>


<br>



</body>

</html>