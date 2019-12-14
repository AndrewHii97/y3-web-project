<!-- redirecting to the login page if not yet login and no seesion is set  -->
<?php
// if(session_id=="" or !isset($_SESSION)) {
//     header('Location:../html/login.html$message="Please_login_first" ');
//     exit();
// }else{
//     session_start();
// }
?>

<!DOCTYPE html>

<html>

<head>
    <title>profile_page</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
 
    <link rel="stylesheet" type="text/css" href="../css/profile.css" />
</head>

<body>
    <!-- Start of BannerBox -->
    <section id="BannerBox">
        <img id="logo" src="../src/logo_A1_Rectangle_4_pattern.png" alt="logo.png">
        <div class="NaviGroup">
            <div class="NaviBtn">
                <img src="../src/book_icon_A1_Rectangle_15_pattern.png" alt="book_icon.png">
            </div>
            <div class="NaviBtn">
                <img src="../src/cart_A1_Rectangle_13_pattern.png" alt="src/cart_icon.png">
            </div>
            <div class="NaviBtn">
                <img src="../src/login_avatar_A1_Rectangle_11_pattern.png" alt="login_cion.png">
            </div>
        </div>
    </section>
    <!-- end of the BannerBox -->
    
    <!-- php script to establish database connection on enter -->
    <?php
        //php to handle form submission
        //variable for database connection
        $servername = "localhost";
        $username="root";
        $password="";
        $dbname="brsp";

        //$id = $_SESSION["id"];# obtain user id from session
        $id = "2"; # stub 

        $conn = new mysqli($servername,$username,$password,$dbname);# establish database connection 
        #check if connection successfully established 
        if(!$conn){
            echo "<h1>fail to connect to database from server</h1>";
            exit();
        }

        if($_SERVER["REQUEST_METHOD"]=="POST"){
            
            $name =filter_var($_POST['full-name'], FILTER_SANITIZE_STRING);
            // $email = $_POST['email'];
            $address =filter_var($_POST['address'], FILTER_SANITIZE_STRING);
            $contact =filter_var($_POST['contact'], FILTER_SANITIZE_STRING);
            //$paypalNo = $_POST['paypal'];

            $statement = $conn->prepare("UPDATE account SET username=?, contact=?, address=? WHERE userid=?");
         
            $statement->bind_param("sssd", $name,$email,$contact,$address,$id);
            $statement->execute();
        }

        $sql = "SELECT * FROM account WHERE userid='$id'";
        $result = $conn->query($sql); #sending query to database to obtain result 
        $user = $result->fetch_assoc();

        #$profileImageURL = $user['PROFILEURL'];
        $userName = $user['USERNAME'];
        $userEmail = $user['EMAIL'];
        $userContact = $user['CONTACT'];
        $userAddress = $user['ADDRESS'];
        // $payPal =$user['PAYPAL'];
    ?>

    <!-- profile picture section -->
    <section>
        <header class='speaker-form-header'>
            <h1>Profile Setting</h1>
            <p><img src="../src/profile.png" alt="Profile Picture" width="250" height="250">
            </p>
        </header>
    </section>

    <!-- form content section -->
    <section>
        
        <form id="profile" action='profile.php' method='POST' class='speaker-form'>
            <div class='form-row'>
                <label for='full-name'>Name</label>
                <input id='full-name' name='full-name' type='text' value='<?php echo "$userName"  ?>' required  >
            </div>

            <div class='form-row'>
                <label for='email'>Email</label>
                <input readonly id='email' name='email' type='email' value='<?php echo "$userEmail" ?>' required  >
            </div>

            <div class='form-row'>
                <label for='address'>Address</label>
                <!-- <input id='address' name='address' type='text' value='<?php echo "$userAddress" ?>' /> -->
                <textarea id='address' name='address' cols="10" form="profile" rows="1" required ><?php echo "$userAddress" ?></textarea>
            </div>

            <div class='form-row'>
                <label for='contact'>Contact No.</label>
                <input id='contact' name='contact' type='text' required value='<?php echo "$userContact"?>' >
            </div>

            <div class='form-row'>
                <!-- paypal column not yet entered inserted into the database -->
                <label for='paypal'>Paypal</label>
                <!-- remember to set the field to required  -->
                <input id='paypal' name='paypal' type='text'  > 
            </div>

            <div class='form-row'>
                <input type="submit" value="edit"></input>
                <a href="../html/password.html">Change Password</a>
                <a href="record.php">Record</a>
            </div>
        </form>

    </section>
</body>

</html>


