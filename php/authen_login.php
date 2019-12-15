<?php
session_start();
?>
<?php  
 require('db_connect.php');

if (isset($_POST['user_id']) and isset($_POST['user_pass'])){
	
// Assigning POST values to variables.
$username = $_POST['user_id'];
$password = $_POST['user_pass'];

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM `account` WHERE username='$username' and userpassword='$password'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($count == 1){
    $data = $result->fetch_assoc();
    // echo $data['USERID'];
    // echo json_encode ($data);
//echo "Login Credentials verified";
$_SESSION["id"] = $data['USERID'];
$_SESSION["username"] = $data['USERNAME'];
$cookie_name = "userid";
$cookie_value = $data['USERID'];
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
echo "Session variables are set.";
header('Location:../index.php');
echo "<script type='text/javascript'>alert('Login Credentials verified')</script>";

}else{
echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
//echo "Invalid Login Credentials";
}
}
// close();
?>
