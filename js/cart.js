
document.cookie="userid=";
/*
    array of book object 
    object property 
    BOOKID,BOOKNAME,GENRE,AUTHOR,PUBLISHER,PRICE,RENT_RATE,BOOKOWNERID,URL,USERNAME
    p.s:  username: refer to the bookowner username
*/
var myObj;
var xmlhttp = new XMLHttpRequest();

/*
    function to fetch data from php page as json and convert into array of ojbect 
*/
function requestJson() {

    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText)
            myObj = JSON.parse(this.responseText);
            //insert each item into the html text 
            console.log(myObj);
            myObj.forEach(insertCartItem);
            addListenerToClass();
            addListenerToClassDel();
            changeTotal();


        }
    };
    xmlhttp.open("POST", "cart.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-unlencoded");
    xmlhttp.send();
}



function requestDel(userid,bookid){
    var item = {"UserId":userid,"BookId":bookid};
    dbParam = JSON.stringify(item);
    var xmlhttp =new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200){
            console.log(this.responseText);
            
            
            
           
        }
    };

    xmlhttp.open("POST","delete.php",true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("x="+dbParam);
}





/*
    insert the object into the table in form of HTML code 
    below shows rough heirachy of the table 
    tbody
        |-tr
            |-td-imageURL
            |-td-Sell/Buy
            |-td
                |-p-bookName
                |-p-authorName
                |-p-ownerName
                |-p-BookId
                |-p-deleteItem
            |-td-Price
 */
function insertCartItem(item) {
    var htmlText = "<tr><td><img src=" + item.URL + "></td>";

    /*
    if(item.PRICE == 0  ){
        htmlText = htmlText + "<td><input id='"+item.BOOKID+"' class='buysell' type='button' name='BuySell"+item.BOOKID+"' value='Rent'></td>"
    }else{
        htmlText=htmlText + "<td><input id='"+item.BOOKID+"' class='buysell' type='button' name='BuySell"+item.BOOKID+"' value='Buy'></td>"
    }
    */
    if (item.PRICE == 0) {
        htmlText = htmlText + "<td><input class='buysell' type='button' name='BuySell[]' value='Rent'></td>"
    } else {
        htmlText = htmlText + "<td><input class='buysell' type='button' name='BuySell[]' value='Buy'></td>"
    }



    htmlText = htmlText +
        "</td>" +
        "<td>" +
        "<p class='bname'>name:" + item.BOOKNAME + "</p>" +
        "<p class ='aname'>author:" + item.AUTHOR + "</p>" +
        "<p class ='oname'>owner:" + item.USERNAME + "</p>" +
        "<input type='hidden' class ='bid' name='bookid[]' value='" + item.BOOKID + "'>" +
        "<p class='del'>🗑️</p>" +
        "</td>";

    if (item.PRICE == 0) {
        htmlText = htmlText + "<td class='total'>RM" + item.RENT_RATE * 7 + " disabled </td><tr>";

    } else if ( item.RENT_RATE == 0) {
        htmlText = htmlText + "<td class='total'>RM" + item.PRICE + " disabled</td></tr>";
    } else{
        htmlText = htmlText + "<td class='total'>RM" + item.PRICE + "</td><tr>";    
    }
    document.getElementById("CartBody").insertAdjacentHTML('afterbegin', htmlText);

}


/*
    add click listener to all the buysell button 
    change price while clicked 
*/

function addListenerToClass() {
    console.log("addListenerToClass called");
    var selectClassElement = document.getElementsByClassName("buysell");
    for (var x = 0; x < selectClassElement.length; x++) {

        selectClassElement[x].addEventListener("click", function (e) {
            var button = e.target;
            if (button.value == "Buy") {
                button.setAttribute("value", "Rent")
                //call function to change the price to rent price

                //get the bookid of the object 
                var detailNodes = e.target.parentNode.nextSibling.childNodes;
                var bookid = searchElement(detailNodes, "bid");
                if (bookid == null) {
                    console.log("not found");
                }
                //get price of the book with refer to content

                var book = searchBook(myObj, bookid.value);


                //get the price html element to alter price 
                var priceTag = e.target.parentNode.parentNode.lastElementChild;

                priceTag.textContent = "RM" + book.RENT_RATE * 7;

            } else {
                button.setAttribute("value", "Buy")
                //call function to change the price to sell price 

                //get the bookid of the object 
                var detailNodes = e.target.parentNode.nextSibling.childNodes;
                var bookid = searchElement(detailNodes, "bid");
                if (bookid == null) {
                    console.log("not found");
                }
                //get price of the book with refer to content

                var book = searchBook(myObj, bookid.value);


                //get the price html element to alter price 
                var priceTag = e.target.parentNode.parentNode.lastElementChild;


                priceTag.textContent = "RM" + book.PRICE;
            }
            changeTotal();
        });
        
    }
    
}



/*
    Input: array, bookId 
    Output: bookObj 
    Detail: search for the book object in array to obtain information
*/
function searchBook(arr, bookId) {
    var len = arr.length;
    for (var x = 0; x < len; x++) {
        if (arr[x].BOOKID == bookId) {
            return arr[x];
        }
    }
    return null;
}

/*
    Input: array of element, className
    Output: node
    Detail: search for the node corresponding to the className given 
*/
function searchElement(arr, cname) {
    var len = arr.length;
    for (var x = 0; x < len; x++) {
        if (arr[x].className == cname) {
            return arr[x];
        }
    }
    return null;
}

/*
    add click listener to delete button 
    to remove element on click 
*/

function addListenerToClassDel() {
    var selectClassElement = document.getElementsByClassName("del");
    console.log("addListenerToClassDel called");
    //set every delete statement with listener
    for (var x = 0; x < selectClassElement.length; x++) {
        selectClassElement[x].addEventListener("click", function (e) {
            //get the bookid 
            var bookId = e.target.previousSibling; // return the hidden input tag with bid values
            console.log("del:bookid:"+bookId.value);
            requestDel("3",bookId.value);
            var content = e.target.parentNode.parentNode.remove();
            //recalculate the total amount
            changeTotal();
        });
    }

}

/*
    get all the prices and sum them up to get the total value 
*/

function calculateTotal(){
    var sum =0 ;
    var rmValue;
    var totalItem = document.getElementsByClassName("total");
    for(var x =0 ; x< totalItem.length ;x ++ ){
        rmValue =totalItem[x].innerText;    
        var value=parseFloat(rmValue.substr(2));
        sum = sum + value;
    }
    console.log("total calculated");
    return sum;
}

/*
    reflect the total in the html text 
*/

function changeTotal(){
    var totalTable = document.getElementById("amount");
    var total = calculateTotal();
    amount.innerHTML = "RM"+total;
    console.log("total changed");


}