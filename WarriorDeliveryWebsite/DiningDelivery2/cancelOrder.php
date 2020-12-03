<?php
session_start();
?>



<!DOCTYPE html>
<html>
<br>
<head>
    <link rel="stylesheet" href="theme.css">
	<link rel="icon" href="WayneLogo1_small.png" type="image/gif" </link>
	<title>Warrior Delivery</title>
	<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
</head>
<body>
<a href="ProfilePage.php" style="background:none;border:none;display:inline-block;margin:0px;">
<img src="shield_only_color.png" alt="Logo" style="width:96px;height:81px">
</a>
<h1 style="display:inline-block;height:64px;vertical-align:bottom;margin:5px;">Warrior Delivery</h1><br>

<br>
<a href='ProfilePageKitchen.php'>Home</a>



<?php


	$db = new mysqli('localhost','id15421026_affan','Rj!cId5d+)xiYL$7','id15421026_diningdelivery');
	
	$nameofuser = $_POST['cancelOrder'];
	$reason = $_POST['reason'];

	$sql = "SELECT access_id FROM orderlist WHERE order_id = '$nameofuser'";
$result = mysqli_query($db,$sql);

$value = mysqli_fetch_assoc($result);
  
	
   //echo $value['order_id'];
   $sql = "DELETE FROM orderlist WHERE order_id = '$nameofuser'";
   
   //$sql = "UPDATE delivererlogin SET hasOrder = '1', order_id = '$currentOrder' WHERE username = '$nameofuser'";
	$result = mysqli_query($db,$sql);


 
   $myusername = $value['access_id'];
   
   $sql2 = "SELECT email, firstname FROM testvalues WHERE access_id = '$myusername'";
   $result2 = mysqli_query($db,$sql2);
   $value2 = mysqli_fetch_assoc($result2);
   
   $myemail = $value2['email'];
   $firstname = $value2['firstname'];
   
   
   
   

    if($result){
        
        echo "<h3> Item Cancelled! An email will be sent to the user confirming the cancellation. </h3>";
        
        
    }


	//echo $nameofuser;



	$message = "Hello " . $firstname . "!, Unfortunately your order has been cancelled! for the following reason: " . 
	$reason . '
	
	Thank You!
	WSU Dining Delivery
	
	";

	$title = "Your WSU Dining Delivery Order ID: " . $nameofuser . " has been cancelled 
	';
	
   
   
   mail($myemail, $title, $message, 'From: WSU Dining Delivery <wsudiningdelivery@gmail.com>');
	
?>
<br>
<a href='ProfilePageKitchen.php'>Go Back</a>
</body>
</html>